@php
    use Illuminate\Support\Facades\Storage;
@endphp

@extends('partial.index')
@section('container')

<script>
    function increment() {
        document.getElementById('qty-amount').stepUp();
    }
    function decrement() {
        document.getElementById('qty-amount').stepDown();
    }
</script>

<style>
    .left-half{
        width: 50%;
        position: absolute;
        left: 0px;
        height: 100%;
    }

    .right-half{
        width: 50%;
        position: absolute;
        background-color: #DBE8FC;
        right: 0px;
        height: 100%;
    }

    .content{
        font-family: Cambria;
        font-size: 25px;
        margin-top: 45px;
        margin-left: 30px;
        margin-right: 30px;
        color: #2B495E;
    }

    #nama-produk{
        color: #054C73;
        font-weight: bold;
        font-size: 35px;
    }

    #deskripsi{
        margin-top: 10px;
        font-size: 20px;
        color: black;
    }

    #qty{
        margin-top: 10px;
    }

    .end{
        margin-top: 8px;
    }

    #check-out{
        padding: 6px;
        float: right;
        border-radius: 17px;
        background-color: #03344F;
        color: white;
        text-decoration: none;
        margin-right: 30px;
    }

    #check-out:hover{
        background-color: #0073b1;
        color: rgb(255, 255, 255);rgb(0, 27, 41)
    }

    /* #decrement{
        margin-left; 100px;
        color: green;
    } */

    #qty-amount{
        background-color: #054C73;
        /* margin-left: 10px; */
        width: 60px;
        border: none;
        margin-top: 46%;
        color: white;
        text-align: center;
        padding: 0px 6x;
        /* border: 2px solid white; */
        border-radius: 3px;
    }

    .amount-button{
        background-color: #054C73;
        border: none;
        color: white;
        padding: 1px 8px;
        border-radius: 3px;

    }

    .amount-button:hover{
        background-color: #0073b1;
        color: rgb(255, 255, 255);rgb(0, 27, 41)
    }

    .img{
        position: relative;
        height: 100%;
    }

    #price{
        position: absolute;
        bottom: 28px;
        right: 36px;
        color: white;
        font-family: Cambria;
        background-color: #2B495E;
        border-radius: 50%;
        padding: 20px;
        font-weight: bold;
        font-size: 40px;
        box-shadow: 0px 0px 3px black;
    }

</style>

<body>
    <div class="left-half">
        <img src="{{storage::url("images/lamp.jpg")}}" alt="" class="img">
        <span id="price">$75</span>
    </div>

    <div class="right-half">
        <div class="content">
            <div id="nama-produk">Nama Produk</div>
            <div id="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit architecto fugit illum, sint animi iure, quia non totam, ea velit tenetur quod nobis rerum! Cumque facere sapiente quod aliquid dolorum!</div>
            <div id="qty">Stock: </div>

            <div class="qty-amounts">
                <span id="qty2">Quantity: </span>
                <button onclick="decrement()" class="amount-button" id="decrement">-</button>
                <input type="number" id="qty-amount" value="0" min="0">
                <button onclick="increment()" class="amount-button" >+</button>
            </div>

            <div class="end">
                <span id="total-price">Total Price: $</span>
                <a href="/" id="check-out">Check out</a>
            </div>
    </div>


</body>
@endsection
