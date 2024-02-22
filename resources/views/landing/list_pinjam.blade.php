@extends('layout.landing_layout')

@section('content')
    <div class="px-[100px] mt-16">
        <div class="flex justify-center gap-20">
            <div class="w-1/2 font-bold bg-white rounded-xl text-primary" style="padding: 25px 100px">
                <h2 class="text-[28px] text-center mb-5">List Buku</h2>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-primary">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Judul Buku
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Penulis
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peminjaman as $item)
                                <tr class="bg-white border-b ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        @dump($item->buku->id)
                                        {{$item->buku->judul}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$item->buku->penulis}}
                                    </td>
                                    <td class="px-6 py-4">
                                        hapus
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <form class="flex flex-col w-1/2 gap-2 font-bold text-center bg-white rounded-xl text-primary"
                style="padding: 25px 100px">
                <h1 class="text-[28px]  ">PILIH BUKU</h1>
                <p class="text-xl">input judul buku yang akan kamu pinjam</p>
                <div class="w-full" style="margin-top: 15px">
                    <select class="w-full rounded-xl border-primary" name="id_kategori">
                        <option selected>Pilih Kategori</option>
                        @foreach ($buku as $item)
                            <option value="{{ $item->id }}">{{ $item->judul }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit"
                    class="py-3 mt-5 text-white px-7 bg-primary rounded-xl hover:bg-secondary">simpan</button>
            </form>
        </div>
    </div>
@endsection
