@extends('_layouts.main')

@section('body')
  <section id="intro-blog">
    <div class="container">
      <h1 class="text-center font-weight-bold mt-5">Blog</h1>
      <p class="description mt-5 mb-5 text-justify">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius molestie pharetra. Curabitur et est sagittis, elementum magna et, sodales ante. Cras sit amet consequat dolor. Nulla ac nisi metus. Suspendisse fermentum purus vitae ante imperdiet ornare. Duis aliquam rutrum semper. Ut egestas a ligula mollis dictum.
      </p>
    </div>
  </section>

  <main id="main">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div>
              <div class="container">

                <article class="article">
                  @php
                    $test = $page->banner;
                    xdebug_break();
                  @endphp
                  <div>
                    <img src="{{ $page->banner }}" alt="banner-image" class="img-fluid">
                  </div>


                  <h2 class="title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h2>

                  <div class="container mt-4 mb-5">
                    <div class="row">
                      <div class="col-3">
                        <i class="lni lni-user mr-2"></i>
                        <a href="blog-details.html">John Doe</a>
                      </div>
                      <div class="col-8">
                        <time datetime="2020-01-01">Jan 1, 2022</time>
                      </div>
                    </div>
                  </div>

                  <div class="content">
                    <p>
                      Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                      Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                    </p>

                    <p>
                      Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
                    </p>

                    <blockquote>
                      <p>
                        Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
                      </p>
                    </blockquote>

                    <p>
                      Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
                      Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque.
                      Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
                    </p>

                    <h3>Et quae iure vel ut odit alias.</h3>
                    <p>
                      Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui.
                      Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea.
                      Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.
                    </p>
                    <img src="assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">

                    <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
                    <p>
                      Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In assumenda quia quae a id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur sed excepturi sint non placeat quia repellat incidunt labore. Autem facilis hic dolorum dolores vel.
                      Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam vitae.
                    </p>
                    <p>
                      Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.
                    </p>

                  </div><!-- End post content -->

                  <div class="meta-bottom">
                    <i class="bi bi-folder"></i>
                    <ul class="cats">
                      <li><a href="#">Business</a></li>
                    </ul>

                    <i class="bi bi-tags"></i>
                    <ul class="tags">
                      <li><a href="#">Creative</a></li>
                      <li><a href="#">Tips</a></li>
                      <li><a href="#">Marketing</a></li>
                    </ul>
                  </div><!-- End meta bottom -->

                </article>

              </div>
            </div>
          </div>

          <div class="col-lg-4 sidebar">

            <div class="widgets-container">

              <!-- Recent Posts Widget -->
              <div class="recent-posts-widget widget-item">

                <h3 class="widget-title font-weight-bold mt-5">Recent Posts</h3>

                <div class="post-item">
                  <img src="assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0">
                  <div>
                    <h4><a href="blog-details.html">Nihil blanditiis at in nihil autem</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
                </div><!-- End recent post item-->

                <div class="post-item">
                  <img src="assets/img/blog/blog-recent-2.jpg" alt="" class="flex-shrink-0">
                  <div>
                    <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
                </div><!-- End recent post item-->

                <div class="post-item">
                  <img src="assets/img/blog/blog-recent-3.jpg" alt="" class="flex-shrink-0">
                  <div>
                    <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
                </div><!-- End recent post item-->

                <div class="post-item">
                  <img src="assets/img/blog/blog-recent-4.jpg" alt="" class="flex-shrink-0">
                  <div>
                    <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
                </div><!-- End recent post item-->

                <div class="post-item">
                  <img src="assets/img/blog/blog-recent-5.jpg" alt="" class="flex-shrink-0">
                  <div>
                    <h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
                </div><!-- End recent post item-->
              </div><!--/Recent Posts Widget -->
            </div>
          </div>

        </div>
      </div>
    </section>
  </main>
@endsection
