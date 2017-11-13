@extends('layouts.app')

@section('content')
<div class="">

<div class="" style="position: absolute; right: 50%; margin: 10px;">
     <form class="" action="" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
               <label for="title">Title</label>
               <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
          </div>
          <div class="form-group">
               <label for="published">Published</label>
               <input type="date" name="published" class="form-control" id="exampleInputPassword1" placeholder="">
          </div>
          <div class="form-group">
               <label for="finish_reading">Finish reading at</label>
               <input type="date" name="finish_reading" class="form-control" id="exampleInputPassword1" placeholder="">
          </div>
          <div class="form-group">
               <label for="review">Review</label>
               <br>
               <textarea name="review" rows="8" cols="80"></textarea>
          </div>
          <label for="">Rating</label>
          <br>
          <div class="form-check form-check-inline">
            <label class="form-check-label">0
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="0">
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label">1
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="1">
            </label>
          </div>
          <div class="form-check form-check-inline ">
            <label class="form-check-label">2
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="2">
            </label>
          </div>
          <div class="form-check form-check-inline ">
            <label class="form-check-label">3
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3">
            </label>
          </div>
          <div class="form-check form-check-inline ">
            <label class="form-check-label">4
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="4">
            </label>
          </div>
          <div class="form-check form-check-inline ">
            <label class="form-check-label">5
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="5">
            </label>
          </div>
          <br>
          <br>
          <div class="form-group">
               <label for="file">Upload picture</label>
               <input type="file" name="file" value="">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
     </form>
</div>
     <div class="" style="position: absolute; left: 50%; background-color: #8db9fc; width: 100%; height: 300px; margin: 10px; background-image: url(https://www.google.cz/search?q=book+reading&tbm=isch&tbs=rimg:CUtUtvSct3BQIjjqyNhmvWMqhGeAoesMcIZuFNL5qkC2xI3fxNUwOsnyeCQk4rH1M2VuzzZ9AfMxSThj27mBeQPCWSoSCerI2Ga9YyqEEVMm7PPlcBy4KhIJZ4Ch6wxwhm4RF6boU1qkzS0qEgkU0vmqQLbEjRFJ1YFHZse5QyoSCd_1E1TA6yfJ4EWPks3fgzF95KhIJJCTisfUzZW4RgclYbbD6Mn8qEgnPNn0B8zFJOBHftDgIFVz-0SoSCWPbuYF5A8JZEYTOyEORR6k2&tbo=u&sa=X&ved=0ahUKEwiSk42By7fXAhXFVRQKHeNkDhoQ9C8IHw&biw=1440&bih=826&dpr=1#imgrc=3IBz3B98_W9MTM:)">
     </div>

</div>
@endsection
