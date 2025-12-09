<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Channel SMK Taruna Bangsa Bekasi</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            padding: 20px;
            display: flex;
            justify-content: center;
        }
        
        .youtube-widget {
            width: 100%;
            max-width: 1200px;
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .channel-header {
            display: flex;
            align-items: center;
            padding: 20px;
            background-color: #fff;
            border-bottom: 1px solid #e5e5e5;
        }
        
        .channel-logo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-right: 20px;
            overflow: hidden;
        }
        
        .channel-logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .channel-info h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 5px;
        }
        
        .channel-stats {
            display: flex;
            align-items: center;
            color: #606060;
            font-size: 14px;
        }
        
        .channel-stats span {
            margin-right: 15px;
            display: flex;
            align-items: center;
        }
        
        .channel-stats span:not(:last-child)::after {
            content: "•";
            margin-left: 15px;
        }
        
        .content-area {
            padding: 20px;
        }
        
        .section-title {
            font-size: 18px;
            color: #333;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e5e5e5;
        }
        
        .main-video {
            margin-bottom: 30px;
        }
        
        .video-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            margin-bottom: 15px;
        }
        
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 8px;
        }
        
        .video-details {
            padding: 10px 0;
        }
        
        .video-title {
            font-size: 18px;
            font-weight: 500;
            color: #333;
        }
        
        .horizontal-videos {
            margin-top: 30px;
        }
        
        .videos-scroll-container {
            display: flex;
            overflow-x: auto;
            padding: 10px 0;
            gap: 15px;
            scrollbar-width: thin;
            scrollbar-color: #c1c1c1 #f1f1f1;
        }
        
        .videos-scroll-container::-webkit-scrollbar {
            height: 8px;
        }
        
        .videos-scroll-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        .videos-scroll-container::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 10px;
        }
        
        .videos-scroll-container::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
        
        .video-card {
            flex: 0 0 auto;
            width: 280px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }
        
        .video-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }
        
        .video-thumbnail {
            width: 100%;
            height: 158px; /* 16:9 aspect ratio */
            overflow: hidden;
            position: relative;
        }
        
        .video-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .play-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50px;
            height: 50px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
        }
        
        .play-icon::after {
            content: '';
            width: 0;
            height: 0;
            border-left: 12px solid #c00;
            border-top: 8px solid transparent;
            border-bottom: 8px solid transparent;
            margin-left: 3px;
        }
        
        .video-card:hover .play-icon {
            opacity: 1;
        }
        
        .video-card-details {
            padding: 12px;
        }
        
        .video-card-title {
            font-size: 14px;
            font-weight: 500;
            color: #333;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            height: 40px;
        }
        
        .subscribe-button {
            display: inline-block;
            background-color: #c00;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 500;
            text-decoration: none;
            margin-top: 10px;
            font-size: 14px;
            transition: background-color 0.2s;
        }
        
        .subscribe-button:hover {
            background-color: #a00;
        }
        
        .video-player-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }
        
        .modal-content {
            width: 90%;
            max-width: 800px;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
        }
        
        .modal-video-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            height: 0;
        }
        
        .modal-video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .close-modal {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            font-size: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1001;
        }
        
        @media (max-width: 768px) {
            .channel-header {
                flex-direction: column;
                text-align: center;
            }
            
            .channel-logo {
                margin-right: 0;
                margin-bottom: 15px;
            }
            
            .video-card {
                width: 240px;
            }
        }
    </style>
</head>
<body>
    
<iframe src='https://widgets.sociablekit.com/instagram-reels/iframe/25626979' frameborder='0' width='100%' height='1000'></iframe>
           
</body>
</html>