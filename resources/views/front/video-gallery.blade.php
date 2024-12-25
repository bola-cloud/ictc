@extends('layouts.app')

@section('content')

  <section class="address">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h3>About ICTC</h3>
        </div>
    </div>
  </section>

<h1 class="text-center mb-4">Video Gallery</h1>
<section class="video-gallery">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <!-- Video 1 -->
      <div class="col">
        <button class="video-item btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#video-modal" data-video="https://www.w3schools.com/html/mov_bbb.mp4">
          <img src="https://via.placeholder.com/480x320?text=Video+1" class="img-fluid" alt="Video Thumbnail 1">
        </button>
      </div>
      <!-- Video 2 -->
      <div class="col">
        <button class="video-item btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#video-modal" data-video="https://www.w3schools.com/html/movie.mp4">
          <img src="https://via.placeholder.com/480x320?text=Video+2" class="img-fluid" alt="Video Thumbnail 2">
        </button>
      </div>
      <!-- Add more video thumbnails as needed -->
    </div>
  </div>
</section>

<!-- Video Modal -->
<div class="modal fade" id="video-modal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-body">
              <video id="modal-video" controls class="w-100">
                  <source src="" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
          </div>
      </div>
  </div>
</div>

@endsection

@push('js')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const videoModal = document.getElementById("video-modal");
        const modalVideo = document.getElementById("modal-video");

        if (videoModal && modalVideo) {
            // Load video into the modal on show
            videoModal.addEventListener("show.bs.modal", (e) => {
                const button = e.relatedTarget; // Button that triggered the modal
                const videoSrc = button.getAttribute("data-video"); // Get video source URL

                if (videoSrc) {
                    modalVideo.querySelector("source").setAttribute("src", videoSrc);
                    modalVideo.load(); // Load the new video
                } else {
                    console.error("Video source not found.");
                }
            });

            // Pause video when the modal is hidden
            videoModal.addEventListener("hidden.bs.modal", () => {
                modalVideo.pause(); // Stop video playback
                modalVideo.querySelector("source").setAttribute("src", ""); // Clear video source
            });
        } else {
            console.error("Video modal or video element not found in the DOM.");
        }
    });
</script>
@endpush
