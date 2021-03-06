<div class="container-fluid home-fluid">
  <div class="container">
    <h2>{{ pll__('Alba Iulia Smart City 2018') }}</h2>
    <div class="row">
      <div class="holder">
        <div class="alba-logo">
          @include('partials/components/alba-logo-final')
        </div>
      </div>
    </div>
  </div>

  @include('partials/components/about-smart-city', [
    'ce_este' => FrontPage::orasInteligentLink(),
    'de_ce' => FrontPage::deCeAlbaIuliaLink(),
  ])

  <div class="container project-section">
    <h2>{{ pll__('Proiecte') }}</h2>
    <div class="row">
      @foreach (FrontPage::proiecte() as $proiect)
        @if ($proiect)
          @include('partials/components/project-box', [ 'proiect' => $proiect ])
        @endif
      @endforeach
    </div>
    <div class="row">
      <div class="col text-center">
        <a class="button" href="{{ get_permalink(pll_get_post(get_page_by_title('solutii')->ID)) }}">
          {{ pll__('Toate proiectele') }}
          <span class="button-chevron">
            <i class="fas fa-chevron-right"></i>
          </span>
        </a>
      </div>
    </div>
  </div>

  <div class="row trivia-section">
    <div class="container">
      <h2>{{ pll__('Ce trebuie sa stii') }}</h2>
      <div class="row">
        <div class="col-6 text-center">
          <div class="icon transform">
            <i class="fas fa-child"></i>
          </div>
          <a href="{{ FrontPage::pentruCetateniLink() }}" class="cta">
            {{ pll__('Dacă ești') }}
            <b>{{ pll__('Cetățean') }}</b>
          </a>
        </div>
        <div class="col-6 text-center">
          <div class="icon transform">
            <i class="far fa-handshake"></i>
          </div>
          <a class="cta" href="{{ FrontPage::pentruParteneriLink() }}">
            {{ pll__('Dacă ești') }}
            <b>{{ pll__('Partener') }}</b>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="container blog-section">
    <h2>{{ pll__('Noutăți') }}</h2>

    <div class="row">
      @foreach (FrontPage::stiri() as $stire)
        @include('partials/components/article-box', [ 'articol' => $stire ])
      @endforeach
    </div>
  </div>

  <div class="row counter-section">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-2 col-sm-3 col-4">
          <div class="count">
            {{ FrontPage::countProjects() }}
          </div>
          <div class="label">
            {{ pll__('Proiecte') }}
          </div>
        </div>

        <div class="col-md-2 col-sm-3 col-4">
          <div class="count">
            {{ FrontPage::countVerticals() }}
          </div>
          <div class="label">
            {{ pll__('Verticale') }}
          </div>
        </div>

        <div class="col-md-2 col-sm-3 col-4">
          <div class="count">
            {{ FrontPage::countPartners() }}
          </div>
          <div class="label">
            {{ pll__('Parteneri') }}
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container partners-section">
    <h2>{{ pll__('Parteneri') }}</h2>

    <div class="partners-carousel">
      @foreach (FrontPage::parteneri() as $partener)
        <div class="partner">
          <img src="{{ $partener['logo']['url'] }}" />
        </div>
      @endforeach
    </div>
  </div>

  {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
</div>
