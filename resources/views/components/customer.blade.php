
<section id="customer">
            <div class="container">
                <div class="col col-8 customers">
                    <h1>Customers have consistently rated Around 4.7/5 stars</h1>
                </div>    
            </div>
            <div class="container">
                <div class ="card col-4">
                        <div class="star-container">
                            @for($i=0; $i < 5; $i++)
                            <img src="{{ asset('slicing/assets/star.png')}}" alt="star" class="img-star">
                            @endfor
                        </div> 
                        <p>Maecenas convallis non sapien in commodo. Nulla semper pulvinar luctus.
                            Proin luctus.</p>
                        <img src="{{ asset('slicing/assets/google.png')}}" alt="google" class="img-google">
                </div>
                <div class ="card col-4">
                        <div class="star-container">
                            @for($i=0; $i < 5; $i++)
                            <img src="{{ asset('slicing/assets/star.png')}}" alt="star" class="img-star">
                            @endfor
                        </div> 
                        <p>Maecenas convallis non sapien in commodo. Nulla semper pulvinar luctus.
                            Proin luctus.</p>
                        <img src="{{ asset('slicing/assets/amazon.png')}}" alt="google" class="img-google">
                </div>
                <div class ="card col-4">
                        <div class="star-container">
                            @for($i=0; $i < 5; $i++)
                            <img src="{{ asset('slicing/assets/star.png')}}" alt="star" class="img-star">
                            @endfor
                        </div> 
                        <p>Maecenas convallis non sapien in commodo. Nulla semper pulvinar luctus.
                            Proin luctus.</p>
                        <img src="{{ asset('slicing/assets/spotify.png')}}" alt="google" class="img-google">
                </div>
            </div>
        </section>
