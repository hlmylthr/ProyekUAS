@extends('layouts.main')

@section('title', 'Portofolio Grian')

@section('content')

<!-- HOME -->
<section id="home" class="hero">
    <div class="container">
        <h1 class="display-4">Halo, Saya Grian Rafli</h1>
        <p class="lead">Mahasiswa dan Web Developer Pemula</p>
        <a href="#projects" class="btn btn-light btn-lg mt-3">Lihat Proyek</a>
    </div>
</section>

<!-- ABOUT -->
<section id="about" class="section bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Tentang Saya</h2>
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <img src="https://via.placeholder.com/200" class="rounded-circle img-thumbnail" alt="Foto Profil">
            </div>
            <div class="col-md-6">
                <p>Saya adalah mahasiswa informatika yang sedang belajar pengembangan website menggunakan Laravel dan Bootstrap. Saya suka membangun proyek sederhana untuk latihan dan dokumentasi pembelajaran saya.</p>
                <ul class="list-group">
                    <li class="list-group-item">HTML, CSS, Bootstrap</li>
                    <li class="list-group-item">PHP & Laravel</li>
                    <li class="list-group-item">JavaScript Dasar</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- PROJECTS -->
<section id="projects" class="section">
    <div class="container">
        <h2 class="text-center mb-4">Proyek Saya</h2>
        <div class="row">
            @for ($i = 1; $i <= 3; $i++)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Project {{ $i }}">
                    <div class="card-body">
                        <h5 class="card-title">Project {{ $i }}</h5>
                        <p class="card-text">Deskripsi singkat tentang project ke-{{ $i }} yang saya kerjakan menggunakan Laravel dan Bootstrap.</p>
                        <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="section bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Hubungi Saya</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="/contact" method="POST" class="p-4 bg-white shadow rounded mb-4">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama:</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan:</label>
                        <textarea class="form-control" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
        </div>

        <!-- TABEL PESAN MASUK -->
        <h4 class="text-center mb-3">Pesan yang Diterima:</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($contacts as $i => $contact)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>
                                <form action="/contact/{{ $contact->id }}" method="POST" onsubmit="return confirm('Hapus pesan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5">Belum ada pesan masuk.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</section>


@endsection
