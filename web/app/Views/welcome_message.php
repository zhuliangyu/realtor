<style>
img {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.headline {
    font-family: Trebuchet MS, Helvetica, sans-serif;
    font-size: 3.5vw;
    text-align: center;
    background-color: rgb(255,255,255);
    opacity: 0.9;
    color: skyblue;
    margin-top: 30px;
    margin-left: -10px;
    margin-right: -10px;
}

.button {
    background-color: white;
    border: none;
    border-radius:10px;
    opacity: 0.8;
    color: dodgerblue;
    padding: 8px 8px;
    font-family: Trebuchet MS, Helvetica, sans-serif;
    text-align: center;
    display: inline-block;
    text-decoration: none;
    font-size: 2.2vw;
    position: center;
    margin-left: 39vw;
    margin-top: 9.6vw;
}

.button:visited {
    color: dodgerblue;
    text-decoration: none;
    opacity: 0.8;
}

.button:hover {
    background-color: dodgerblue;
    color: white;
}

.body {
    /* background-image: url("https://i.ibb.co/9GsYgtV/building-metal-house-architecture-101808.jpg"); */
    background-image: url("https://i.ibb.co/7gJs5xn/assorted-color-wall-paint-house-photo-1370704.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}

</style>

<h1 class = "headline">Welcome to RealtorInsiderVIP.ca</h1>
<body class="body">
<!-- <div>
    <img src="https://picsum.photos/500/600" alt="">
</div> -->
</body>

<!-- <button class="button"><a href="<?php echo site_url('houses')?>">View Current Listing</a></button> -->

<a class="button" href="<?php echo site_url('houses')?>">View Current Listing</a>
