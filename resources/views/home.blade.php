@extends('layout.main')
@section('container')

<div class="head-section">
    <div class="container">
      <div class="row p-3">
        <div class="col align-self-center">
          <img
            src="{{ asset('img/header_1.png') }}"
            class="img-fluid"
          />
        </div>
      </div>
    </div>
  </div>
<!-- CONTENT -->
    <div class="container">
        <div class="card mb-3 shadow-sm">
          <div class="row">
            <div class="col-md-8 align-self-center">
              <div class="card-body">
                <h3 class="card-title font-weight-bold">Card title</h3>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <p class="card-text">
                  <small class="text-dark">Posted 20 May</small>
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <img
                src="https://images.unsplash.com/photo-1588774210246-a1dc467758df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80"
                class="card-img"
                alt="..."
              />
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-4">
        <div class="row">
          <div class="col-md-4">
            <div class="card shadow-sm">
              <img
                src="https://images.unsplash.com/photo-1588779851655-558c2897779d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h4 class="card-title font-weight-bold">Stay safe</h4>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a
                  href="#"
                  class="btn btn-link float-right text-dark font-weight-bold"
                  >Read more</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-sm">
              <img
                src="https://images.unsplash.com/photo-1588778117702-f92209c7e797?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h4 class="card-title font-weight-bold">At home</h4>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a
                  href="#"
                  class="btn btn-link float-right text-dark font-weight-bold"
                  >Read more</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-sm">
              <img
                src="https://images.unsplash.com/photo-1588852065463-5de1411ea697?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h4 class="card-title font-weight-bold">Protect NHS</h4>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a
                  href="#"
                  class="btn btn-link float-right text-dark font-weight-bold"
                  >Read more</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-4 bg-latest">
        <div class="row">
          <div class="col align-self-center p-5">
            <h3 class="card-title font-weight-bold">Card title</h3>
            <p class="card-text">
              This is a wider card with supporting text below as a natural lead-in
              to additional content. This content is a little bit longer. This is
              a wider card with supporting text below as a natural lead-in to
              additional content. This is a wider card with supporting text below
              as a natural lead-in to additional content.
            </p>
            <a
              href="#"
              class="btn btn-link float-right text-dark font-weight-bold"
              >Read more</a
            >
          </div>
          <div class="col p-0">
            <img
              src="https://images.unsplash.com/photo-1588776934778-215d71d3e61e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80"
              class="img-fluid"
            />
          </div>
        </div>
        <a class="btn btn-more float-right text-light mt-3"
          >See more <i class="ri-arrow-up-circle-fill"></i
        ></a>
      </div>
      <!-- CONTENT -->
@endsection

