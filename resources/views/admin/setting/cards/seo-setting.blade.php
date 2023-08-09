<div class="card border border-primary">
    <div class="card-body">
        <form action="{{ route('admin.seo-setting.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="">{{__('Site Seo Title') }}</label>
                <input type="text" name="site_seo_title" value="" class="form-control" value="">
                @error('site_seo_title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">

                <label for="">{{__('Site Seo Description') }}</label>
                <textarea name="site_seo_description" class="form-control" style="height: 300px" id="" cols="30" rows="10"></textarea>
                @error('site_seo_description')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">

                <label for="">{{__('Site Seo Keywords') }}</label>
                <input name="site_seo_keywords" type="text" class="form-control inputtags" value="">
                @error('site_seo_keywords')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">{{__('Save') }}</button>
        </form>
    </div>
</div>
