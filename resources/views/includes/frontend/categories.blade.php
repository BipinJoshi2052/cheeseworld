@section('categories-content')
<!--Categories Content -->
<div class="card-wrapper mb-2">
  <div class="card-group-item">
      <div class="card-head">
          <div class="heading d-flex align-items-center text-center flex-wrap mb-2">
              <div class="head">
                  <h5 class="text-uppercase pl-5 m-0">
                      {{ trans('frontend.category_label') }}</h5>
              </div>
          </div>
      </div>
      <div class="filter-content1">
          <div class="card-body p-3">
              <ul class="mb-0">
                <?php 
                    $productCategoriesTrees = array_slice($productCategoriesTree, 0, 6);
                    $remainProductCategoriesTree = array_slice($productCategoriesTree, 6);
                ?>
                  @if (count($productCategoriesTree) > 0)
                      @foreach ($productCategoriesTrees as $data)
                          <li>
                              <div class="item">
                                  <a href="{{ route('categories-page', $data['slug']) }}" class="category-item py-1 {{ request()->cat_slug == $data['slug'] ? 'active': '' }}">{!! $data['name'] !!}
                                   </a>
                                  {{-- <a href="{{ route('categories-page', $data['slug']) }}" class="category-item py-1 {{ $loop->first ? 'active': '' }}">{!! $data['name'] !!}
                                   </a> --}}
                              </div>
                          </li>
                      @endforeach
                  @endif
              </ul>
              <div class="collapse" id="expand1">
                  <ul>
                   @if (count($productCategoriesTree) > 0)
                   @foreach ($remainProductCategoriesTree as $data)
                       <li>
                           <div class="item">
                               <a href="{{ route('categories-page', $data['slug']) }}" class="category-item py-1">{!! $data['name'] !!}
                                </a>
                           </div>
                       </li>
                   @endforeach
               @endif
                  </ul>
              </div>
          </div>
          <!-- card-body.// -->
      </div>
      <div class="expand text-center">
          <a data-toggle="collapse" href="#expand1" role="button" aria-expanded="false"
              aria-controls="expand1">View more</a>
      </div>
  </div>
  <!-- card-group-item.// -->
</div>
<!--Categories Content Ends -->

@endsection 