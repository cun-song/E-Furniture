@extends('partial.index')
@section('container')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="../E-Furniture/resources/js/qty-amount.js"></script>

<script>
    $(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

            $('#quantity').val(quantity + 1);


            // Increment

    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
    });

});

</script>

<style>
    .left-half{
    /* background: url(bg-1.jpg); */
    width: 50%;
    position: absolute;
    left: 0px;
    height: 100%;
    }

    #text{
        color: black;
        font-size: 35px;
        text-align: center;
        margin-top: 45%;

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
        color: black;
    }

    #nama-produk{
        color: #054C73;
        font-weight: bold;
        font-size: 35px;
    }

    #deskripsi{
        margin-top: 10px;
        font-size: 20px;
    }

    #qty{
        margin-top: 10px;
    }

    .qty-amount{
        margin-top: 46%;
    }

    #total-price{
        margin-top: 10px;
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

    #qty-amount{
        background-color: #DBE8FC;
        margin-left: 10px;
        width: 70px;
        border: none;
    }

</style>

<body>
    <div class="left-half">
        <div id="text">Gambar produk</div>
    </div>

    <div class="right-half">
        <div class="content">
            <div id="nama-produk">Nama Produk</div>
            <div id="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit architecto fugit illum, sint animi iure, quia non totam, ea velit tenetur quod nobis rerum! Cumque facere sapiente quod aliquid dolorum!</div>
            <div id="qty">Stock: </div>

            <div class="qty-amount">
                <span id="qty2">Quantity: </span>
                <input type="number" id="qty-amount" value="0">
                {{-- <div class="col-lg-2">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                            <span class="glyphicon glyphicon-minus"></span>
                            </button>
                        </span>
                        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
                        <span class="input-group-btn">
                            <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>

                    </div>
                </div>
            </div> --}}

            <div class="end">
                <span id="total-price">Total Price: $</span>
                <a href="/" id="check-out">Check out</a>
            </div>

        </div>
    </div>


</body>
@endsection

