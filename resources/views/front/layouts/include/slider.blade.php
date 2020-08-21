<div class="slider-section">
    <div class="slideshow-container">
        @foreach($sliders as $slider)
            <div class="mySlides fadee" style="display: none;">
                <img src="{{asset('uploads/slider/').'/'.$slider->photo ?? ''}}">
            </div>
        @endforeach
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot active"></span>
        <span class="dot"></span>
    </div>
</div>
