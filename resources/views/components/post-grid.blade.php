<section id="posts" class="posts">
    <div class="container" data-aos="fade-up">
        <div class="row g-5">
            @if ($dataList->count())
                <div class="col-lg-5">
                    <div class="post-entry-1 lg">
                        <a href="single-post.html"><img src="{{ asset('storage/' . $dataList[0]->image) }}" alt=""
                                class="img-fluid"></a>
                        <div class="post-meta"><span class="date">{{ $dataList[0]->category->name }}</span> <span
                                class="mx-1">&bullet;</span>
                            <span> {{ $dataList[0]->created_at->diffForHumans() }}</span>
                        </div>
                        <h2><a href="posts-detail/{{ $dataList[0]->id }}">{{ $dataList[0]->title }}</a></h2>
                        <p class="mb-4 d-block">{{ $dataList[0]->excerpt }}</p>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="row g-5">
                        <div class="col-lg-6 border-start custom-border">
                            @foreach ($dataList->skip(1) as $item)
                                <div class="post-entry-1">
                                    <a href="single-post.html"><img src="{{ asset('storage/' . $item->image) }}"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">{{ $item->category->name }}</span> <span
                                            class="mx-1">&bullet;</span>
                                        <span>{{ $item->created_at->diffForHumans() }}</span>
                                    </div>
                                    <h2><a href="posts-detail/{{ $item->id }}">{{ $item->title }}</a></h2>
                                </div>
                            @endforeach
                        </div>
                        <!-- Trending Section -->
                        <div class="col-lg-6">

                            <div class="trending">
                                <h3>Trending</h3>
                                <ul class="trending-post">
                                    @foreach ($dataList as $item)
                                        <li>
                                            <a href="posts-detail/{{ $item->id }}">
                                                <h3>{{ $item->title }}</h3>
                                                <span class="author">{{ $item->created_at->diffForHumans() }}</span>
                                                <span class="author mb-3 d-block">{{ $item->author->name }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div> <!-- End Trending Section -->
                    </div>
                </div>
            @else
                <p class="text-center fs-4">No Post Found.</p>
            @endif

        </div> <!-- End .row -->
    </div>
</section>
