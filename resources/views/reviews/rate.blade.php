






@switch($a)
    @case($a <= 19 )
        <span class="far fa-star-half">
        @break

    @case($a <= 29)
        <span class="far fa-star"></span>
        @break
    @case($a <= 39)
        <span class="far fa-star"></span><span class="far fa-star-half"></span>
        @break
    @case($a <= 49)
     <span class="far fa-star"></span><span class="far fa-star"></span>
        @break
    @case($a <= 59)
        <span class="far fa-star"><span class="far fa-star"></span><span class="far fa-star-half"></span>
        @break
    @case($a <= 69)
        <span class="far fa-star"><span class="far fa-star"></span><span class="far fa-star"></span>
        @break
    @case($a <= 79)
        <span class="far fa-star"><span class="far fa-star"></span><span class="far fa-star"></span><span class="far fa-star-half"></span>
        @break
    @case($a <= 89)
        <span class="far fa-star"><span class="far fa-star"></span><span class="far fa-star"></span><span class="far fa-star"></span>
        @break
    @case($a <= 90)
        <span class="far fa-star"><span class="far fa-star"></span><span class="far fa-star"></span><span class="far fa-star"></span><span class="far fa-star-half"></span>
    @case($a = 100)
        <span class="far fa-star"><span class="far fa-star"></span><span class="far fa-star"></span><span class="far fa-star"></span><span class="far fa-star"></span>
        @break


    @default


@endswitch
