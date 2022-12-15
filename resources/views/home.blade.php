@extends('partial.index')
@section('container')
        <div class="allText">
            @include('partial.navbar')
            <div>
                <div class="backgroundhome position-relative">
                    <div class="homedarker"></div>
                    <h1 class="E-Furniture">
                        E-Furniture
                    </h1>
                    <p class="subText">
                        E-Furniture adalah website yang memudahkan Anda dalam
                        mencari furniture yang cocok
                    </p>
                </div>
            </div>
            <div class="secondSection container">
                <div>
                    <div>
                        <h2 class="subTitle">
                            Inspiration Collection
                        </h2>
                    </div>
                    <div class="subText_subTitle">
                        <p>
                            Kumpulan furniture yang lengkap dapat memberi Anda inspirasi
                        </p>
                    </div>
                </div>
                <div class="photo">
                    <div class="firstPosition ">
                        <div>
                            <img src="storage/image/spacejoy-c0JoR_-2x3E-unsplash.jpg" class="firstPhoto">
                        </div>
                    </div>
                    <div class="secondPosition ">
                        <div>
                            <img src="storage/image/spacejoy-IH7wPsjwomc-unsplash.jpg" class="secondPhoto">
                        </div>
                    </div>
                    <div class="thirdPosition ">
                        <div>
                            <img src="storage/image/nathan-fertig-FBXuXp57eM0-unsplash.jpg" class="thirdPhoto">
                        </div>
                    </div>
                </div>
            </div>
            <div class="thirdSection">
                <div class="thirdSection_Left">
                    <div>
                        <div>
                        <h2 class="textSection3">
                            Get Your Furniture
                        </h2>
                    </div>
                    <div>
                        <p>
                            Description
                        <p>
                    </div>
                    <div>
                        <button class="findButton">
                            Find
                        </button>
                    </div>
                    </div>
                </div>
                <div class="thirdSection_Right">
                    <div>
                        <img src="storage/image/collov-home-design-HmHArS-HvNw-unsplash.jpg" class="photoSection3">
                    </div>
                </div>
            </div>
            <div class="fourSection">
                <div class="fourSection_Left">
                    <h4>
                        Nama
                    </h4>
                    <p>
                        Do eiusmod tempor incididunt ut labore et
                    </p>
                    <h4>
                        Follow Us
                    </h4>
                </div>
                <div class="fourSection_Right">
                    <div>
                        <h4>
                            Upcoming Product
                        </h4>
                    </div>
                    <div class="thosePhoto">
                        <div class="positionPhotoFour">
                            <img src="storage/image/spacejoy-vPKNB_gc23Q-unsplash.jpg" class="photoFour">
                        </div>
                        <div class="positionPhotoFour">
                            <img src="storage/image/spacejoy-YnLJ3rM4VtI-unsplash.jpg" class="photoFour">
                        </div>
                        <div class="positionPhotoFour">
                            <img src="storage/image/kara-eads-buhmhprfo3g-unsplash.jpg" class="photoFour">
                        </div>
                        <div class="positionPhotoFour">
                            <img src="storage/image/aranprime-KbytCpI1i5I-unsplash.jpg" class="photoFour">
                        </div>
                    </div>
                </div>
            </div>
            <div class="footerSection">
                    Nama anggota
            </div>
        </div>
@endsection
