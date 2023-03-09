<section class="category-section">
    <div class="container" data-aos="fade-up">

        @if ($dataList->count())
            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2>See All Post</h2>
                <div><a href="#" class="more">See All Post</a></div>
            </div>

            <div class="row">
                <div class="col-md-9">

                    <div class="d-lg-flex post-entry-2">
                        <a href="single-post.html" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                            <img src="{{ asset('storage/' . $dataList[0]->image) }}"
                                alt="{{ $dataList[0]->category->name }}" class="img-fluid">
                        </a>
                        <div>
                            <div class="post-meta"><span class="date">{{ $dataList[0]->category->name }}</span> <span
                                    class="mx-1">&bullet;</span>
                                <span>{{ $dataList[0]->created_at->diffForHumans() }}</span>
                            </div>
                            <h3><a href="single-post.html">{{ $dataList[0]->title }}</a></h3>
                            <p>
                                {{ $dataList[0]->excerpt }}
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            @foreach ($dataList[0]->skip(0) as $item)
                                <div class="post-entry-1 border-bottom">
                                    <a href="single-post.html"><img src="{{ asset('storage/' . $item[0]->image) }}"
                                            alt="{{ $item[0]->category->name }}" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">{{ $item[0]->category->name }}</span>
                                        <span class="mx-1">&bullet;</span>
                                        <span>{{ $item[0]->created_at->diffForHumans() }}</span>
                                    </div>
                                    <h2 class="mb-2"><a href="single-post.html">{{ $item[0]->title }}</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                    <p class="mb-4 d-block">{{ $item[0]->excerpt }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    @foreach ($dataList->skip(0) as $item)
                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">{{ $item->name }}</span> <span
                                    class="mx-1">&bullet;</span>
                                <span>{{ $item->created_at->diffForHumans() }}</span>
                            </div>
                            <h2 class="mb-2"><a href="single-post.html">{{ $item->title }}</a></h2>
                            <span class="author mb-3 d-block">{{ $item->author->name }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>
