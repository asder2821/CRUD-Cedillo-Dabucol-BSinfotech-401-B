<nav class="navbar navbar-expand-lg bg-body-tertiary shadow sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('storage/images/temu.jpg') }}" alt="Logo" style="height: 40px;"> <!-- Adjust height as needed -->
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('categories/view')}}">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>