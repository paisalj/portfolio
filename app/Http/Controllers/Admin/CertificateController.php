
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::latest('issue_date')->get();

        return view('admin.certificates.index', compact('certificates'));
    }

    public function create()
    {
        return view('admin.certificates.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'issuer' => ['nullable', 'string', 'max:255'],
            'certificate_number' => ['nullable', 'string', 'max:255'],
            'issue_date' => ['nullable', 'date'],
            'credential_url' => ['nullable', 'url', 'max:255'],
            'image' => ['nullable', 'image', 'max:2048'],
            'description' => ['nullable', 'string'],
        ]);

        if ($request->hasFile('image')) {
            $uploadPath = public_path('uploads/certificates');

            if (!File::isDirectory($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            $file = $request->file('image');
            $fileName = uniqid('certificate_') . '.' . $file->extension();

            $file->move($uploadPath, $fileName);

            $validated['image'] = 'uploads/certificates/' . $fileName;
        }

        Certificate::create($validated);

        return redirect()
            ->route('admin.certificates')
            ->with('success', 'Certificate berhasil ditambahkan.');
    }

    public function edit(Certificate $certificate)
    {
        return view('admin.certificates.edit', compact('certificate'));
    }

    public function update(Request $request, Certificate $certificate)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'issuer' => ['nullable', 'string', 'max:255'],
            'certificate_number' => ['nullable', 'string', 'max:255'],
            'issue_date' => ['nullable', 'date'],
            'credential_url' => ['nullable', 'url', 'max:255'],
            'image' => ['nullable', 'image', 'max:2048'],
            'description' => ['nullable', 'string'],
        ]);

        if ($request->hasFile('image')) {
            $uploadPath = public_path('uploads/certificates');

            if (!File::isDirectory($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            // Hapus gambar lama jika sebelumnya tersimpan di uploads/certificates.
            if (
                $certificate->image &&
                str_starts_with($certificate->image, 'uploads/certificates/')
            ) {
                $oldImage = public_path($certificate->image);

                if (File::exists($oldImage)) {
                    File::delete($oldImage);
                }
            }

            $file = $request->file('image');
            $fileName = uniqid('certificate_') . '.' . $file->extension();

            $file->move($uploadPath, $fileName);

            $validated['image'] = 'uploads/certificates/' . $fileName;
        }

        $certificate->update($validated);

        return redirect()
            ->route('admin.certificates')
            ->with('success', 'Certificate berhasil diperbarui.');
    }

    public function destroy(Certificate $certificate)
    {
        if (
            $certificate->image &&
            str_starts_with($certificate->image, 'uploads/certificates/')
        ) {
            $imagePath = public_path($certificate->image);

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        $certificate->delete();

        return redirect()
            ->route('admin.certificates')
            ->with('success', 'Certificate berhasil dihapus.');
    }
}
