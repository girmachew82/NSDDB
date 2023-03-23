@extends('app')
@section('content')
<style>
    p{
 margin-left: 50px;
 margin-right: 50px;
 text-align: justify;
    }
    .one{
     margin-top: 15px;

    }
    .right{
     text-align: right;
    }
 </style>
 <section class="one">
     <figure class="figure w-100 text-center">
         <img src="{{asset('images/ab.jpg')}}" class="figure-img rounded img-fluid max-width: 100%  height: auto align-center" alt="" width="40%" height="300" >

         <figcaption class="figure-caption text-center text-dark"><u>የሀ/ስብከቱ ሊቀ ጳጳስ መልእክት</u></figcaption>
       </figure>


    </section>
 @endsection
