@extends('layouts.master')

@section('title', 'Shopping Cart - ChocoLux')

@section('content')
<div class="keranjang-container">
    <h2>Keranjang Belanja</h2>

    @if(!empty($cartItems))
        <form action="{{ route('cart.update') }}" method="POST">
                @csrf
                <table>
                    <thead>
                        <tr>
                            <th>Produk</th>                      
                            <th>Harga</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $grandTotal = 0; @endphp
                        @foreach($cartItems as $item)
                            @php
                                $totalPrice = $item->price * $item->quantity;
                                $grandTotal += $totalPrice;
                            @endphp
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>Rp. {{ number_format($item->price, 0, ',', '.') }}</td>
                                <td>Rp. {{ number_format($totalPrice, 0, ',', '.') }}</td>
                                <td>
                                    <button type="submit"
                                            form="remove-form-{{ $item->id }}"
                                            class="btn"
                                            onclick="return confirm('Yakin ingin menghapus item ini?')">
                                        <i class="fas fa-trash"></i>
                                    </button>

                                    <form id="remove-form-{{ $item->id }}"
                                        action="{{ route('cart.remove', $item->id) }}"
                                        method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="total">
                    Total Keseluruhan: Rp. {{ number_format($grandTotal, 0, ',', '.') }}
                </div>

               <div class="button-container">
                    <div class="update-btn">
                        <a href="{{ route('products.index') }}" class="btn">
                            Tambah Barang
                        </a>
                    </div>
                    <div class="checkout-btn">
                        <a href="{{ route('checkout') }}" class="btn">
                            Checkout
                        </a>
                    </div>
                </div>
            </form>

    @else
        <p>Your cart is empty.</p>
        <a href="{{ route('products.index') }}" class="btn">Belanja Sekarang</a>
    @endif

    <a href="{{ route('products.index') }}" class="add-product-btn">
        <i class="fas fa-plus"></i>
    </a>
</div>
@endsection

@section('styles')
<style>
    .keranjang-container {
        max-width: 800px;
        margin: 2rem auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    table th, table td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ddd;
    }

    table th {
        background-color: #8B4513;
        color: white;
    }

    .jumlah-input {
        width: 60px;
        padding: 5px;
        text-align: center;
        border: 1px solid #8B4513;
        border-radius: 4px;
    }

    .btn {
        display: inline-block;
        padding: 8px 15px;
        background-color: #8B4513;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #A0522D;
        color: white;
    }

    .button-container {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .total {
        text-align: right;
        font-size: 1.2em;
        font-weight: bold;
        margin: 20px 0;
        color: #8B4513;
    }

    .add-product-btn {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        background-color: #8B4513;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        transition: transform 0.3s;
    }

    .add-product-btn:hover {
        transform: scale(1.1);
        color: white;
    }

    .fa-trash {
        color: #dc3545;
    }

    @media (max-width: 768px) {
        .button-container {
            flex-direction: column;
            gap: 10px;
        }

        .button-container > div {
            width: 100%;
        }

        .btn {
            width: 100%;
            text-align: center;
        }
    }
</style>
@endsection
