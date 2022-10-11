@extends('backend.master')

@section('title')
    Add Role Info
@endsection



@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Role  Info', 'child' =>'Add'])
@endsection



@section('body')
<section>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                   Add Role Info
                   <a href="{{ route('roles.index') }}" class="btn btn-success float-end">
                    Manage Roles
{{--                                    <i class="dripicons-arrow-thin-left"></i>--}}
                </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('roles.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label class="form-label">Role Title</label>
                            <input type="text" class="form-control" name="title" value="" data-provide="typeahead" id="the-basics" placeholder="Role Title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Role Permissions</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">select_all</span>
                                <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">deselect_all</span>
                            </div>
                            <select name="permissions[]" class="select2 form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Set Permissions">
                                @foreach($permissions as $permission)
                                    <option value="{{ $permission->id }}" {{ isset($role) && $role->permissions->contains($permission->id) ? 'selected' : '' }}>{{ $permission->title }}</option>
                                @endforeach
                            </select>
                        </div>


                       
                        
                        <div class="row mt-3">
                            <label for="" class="col-md-4">
                            </label>
                            <div class="col-md-8">
                                <input type="submit" value="Add Role  " class="btn btn-success">
                            </div>
                        </div>


                              
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@section('script')

  <script>
    CKEDITOR.replace('editor');
  </script>

  <script>
    $('.select-all').click(function () {
    let $select2 = $(this).parent().siblings('.select2')
    $select2.find('option').prop('selected', 'selected')
    $select2.trigger('change')
  })
  $('.deselect-all').click(function () {
    let $select2 = $(this).parent().siblings('.select2')
    $select2.find('option').prop('selected', '')
    $select2.trigger('change')
  })

  $('.select2').select2()
  </script>

@endsection

@endsection
