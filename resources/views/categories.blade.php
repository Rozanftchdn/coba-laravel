      @extends('layouts.main')

      @section('container')
            <h2 class="mb-5">Post categories</h2>

                              <div class="container">
                                    <div class="row">
                                          @foreach ($Categories as $category)
                                          <div class="col -md-4">
                                                <a href="/posts?category={{ $category->slug }}">
                                                <div class="card bg-dark text-white">
                                                      <img src="https://source.unsplash.com/200x200?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                                                      <div class="card-img-overlay d-flex align-items-center p-0">
                                                      <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0, 0, 0,0.7)">{{ $category->name }}</h5></div>
                                                </div>
                                          </a>
                                          </div>
                                    @endforeach
                              </div>
                        </div>
      @endsection 
      
