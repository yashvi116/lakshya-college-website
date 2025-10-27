<?php
include 'header.php';
?>

    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f6fa;
            margin: 0;
            padding: 0;
        }
        .event-gallery-section {
            max-width: 1000px;
            margin: 40px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.10);
            padding: 36px 32px 32px 32px;
        }
        .event-gallery-section h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 18px;
        }
        .event-gallery-section p {
            text-align: center;
            color: #555;
            margin-bottom: 32px;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 18px;
            margin-bottom: 32px;
        }
        .gallery img {
            width: 100%;
            height: 140px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 1px 6px rgba(44,62,80,0.10);
            transition: transform 0.2s;
        }
        .gallery img:hover {
            transform: scale(1.05);
        }
        
        @media (max-width: 700px) {
            .event-gallery-section {
                padding: 16px 4vw;
            }
            .gallery img {
                height: 100px;
            }
        }
    </style>
<section>
    <div class="event-gallery-section">
        <h2>Last Year's Grand Celebration</h2>
        <p>Relive the best moments from last year's college event! Here are some highlights captured in photos and video.</p>
        <div class="gallery">
            <img src="img/E_1.jpg" alt="Event Photo 1">
            <img src="img/ekites.jfif" alt="Event Photo 2">
            <img src="img/E_2.jpg" alt="Event Photo 3">
            <img src="img/eholi.jfif" alt="Event Photo 4">
            <img src="img/eganesh.jfif" alt="Event Photo 5">
            <img src="img/eyoga.jfif" alt="Event Photo 6">
            <img src="img/E_3.jpg" alt="Event Photo 7">
            <img src="img/econsert.jfif" alt="Event Photo 8">
             <img src="img/enavratri.jfif" alt="Event Photo 9"> 
            <img src="img/ecresmas.jfif" alt="Event Photo 10">
            <img src="img/e_5.jfif" alt="Event Photo 11">
            <img src="img/e_4.jfif" alt="Event Photo 12">


        </div>
        
    </div>
    </section>
