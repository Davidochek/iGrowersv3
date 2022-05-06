@extends('layouts.admins')
@section('content')

        <div class="row">
          <div class="col-md-12">
              <div class="main-card mb-3 card">
            <div class="card-header">Registered Crops
            </div>
            <div class="table-responsive">
                <table  class="mb-0 table" id="cropstable1">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Crop</th>
                            <th class="text-center">Date Planted</th>
                            <th class="text-center">Expected Harvest Date</th>
                            <th class="text-center">Expected Volume</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($crops as $crop)
                       <tr>
                           <td>{{$crop->id}}</td>
                           <td>{{$crop->crop}}</td>
                           <td>{{$crop->dateplanted}}</td>
                           <td>{{$crop->expectedharvestdate}}</td>
                           <td>{{$crop->expectedvolume}}</td>
                           <td><button class="btn btn-success">Add Harvest</button></td>
                       </tr>
                       @endforeach
                   </tbody>
               </table>
           </div>
       </div>
          </div>
        </div>
  
@endsection
@push('scripts')
@endpush