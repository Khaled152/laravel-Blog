<div>
    <div class="page-header">
        <div class="row align-items-center">
          <div class="col-auto">
            <span class="avatar avatar-md" style="background-image: url(/samples/avatars/023m.jpg)"></span>
          </div>
          <div class="col">
            <h2 class="page-title">{{ $author->name }}</h2>
            <div class="page-subtitle">
              <div class="row">
                <div class="col-md-6">

                  <a href="#" class="text-reset">@ {{ $author->username }} | {{ $author->authorType->name }}</a>
                </div>

              </div>
            </div>
          </div>
          <div class="col-auto  d-md-flex">
            <a href="#" class="btn btn-primary">

                Change Picture
            </a>
          </div>
        </div>
      </div>
</div>
