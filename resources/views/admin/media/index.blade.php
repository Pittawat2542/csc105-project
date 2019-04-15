@extends('admin.layouts.admin')

@section('content')
    <div class="col-lg-12">
        <h1>Pictures</h1>
        @if($photos)
            <form action="delete/media" method="post" class="form-inline">
                {{csrf_field()}}
                {{method_field('delete')}}
                <div class="form-group">
                    <select name="checkBoxArray" id="" class="form-control">
                        <option value="">Delete</option>
                    </select>
                    <div class="form-group">
                        <input type="submit" name="delete_all" class="btn btn-primary"
                               value="Confirm">
                    </div>
                </div>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th><input type="checkbox" id="options"></th>
                        <th>#</th>
                        <th>Picture</th>
                        <th>Created</th>
                        <th>Prefix</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($photos->sortByDesc('id') as $photo)
                        <tr>
                            <td><input type="checkbox" name="checkBoxArray[]" value="{{$photo->id}}" class="checkBoxes"></td>
                            <td>{{$photo->id}}</td>
                            <td><img height="60" src="{{($photo->path) ? $photo->path :
                      'http://placehold.it/60?text=no image'}}"></td>
                            <td>{{$photo->created_at ? $photo->created_at : ''}}</td>
                            <td>{{$photo->photoSource()}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </form>
        @endif

        <div class="row">
            <div class="col-sm-6 col-sm-offset-5">

                {{$photos->render()}}

            </div>
        </div>
    </div>

@endsection
@section('footer')
    <script>
        $(document).ready(function() {

            $('#options').click(function(){

                if(this.checked) {

                    $('.checkBoxes').each(function(){

                        this.checked = true;

                    });

                }else {

                    $('.checkBoxes').each(function(){

                        this.checked = false;

                    });

                }

            });

        });
    </script>
@endsection