<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Integration</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <!-- Navigation Bar -->








<?php
// Filename: eightball_banner.php
// This page implements an 8Ball API banner similar to the screenshot
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8Ball API</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');
        
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #1a202c 0%, #2d3748 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .banner {
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }
        
        .banner:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
        }
        
        .separator {
            width: 4px;
            height: 4px;
            background-color: #718096;
            border-radius: 50%;
        }
        
        .try-button {
            background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 100%);
            transition: all 0.3s ease;
            letter-spacing: 0.5px;
        }
        
        .try-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(124, 58, 237, 0.4);
        }
        
        .glowing-dot {
            width: 8px;
            height: 8px;
            background-color: #10B981;
            border-radius: 50%;
            box-shadow: 0 0 10px #10B981;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { opacity: 0.8; }
            50% { opacity: 0.4; }
            100% { opacity: 0.8; }
        }
        
        .api-demo {
            background: rgba(26, 32, 44, 0.7);
            border: 1px solid rgba(74, 85, 104, 0.3);
            transition: all 0.3s ease;
        }
        
        .api-demo:hover {
            background: rgba(26, 32, 44, 0.9);
        }
    </style>
</head>
<body class="text-gray-200">
    <!-- Banner Section -->
    <div class="banner w-full max-w-6xl rounded-2xl bg-gradient-to-r from-gray-800 to-gray-900 p-6">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <!-- Left side with logo and copyright -->
            <div class="flex items-center space-x-3 mb-4 md:mb-0">
                <div class="w-12 h-12 bg-indigo-600 rounded-full flex items-center justify-center">
                    <span class="text-2xl font-bold">8</span>
                </div>
                <div>
                    <h1 class="text-2xl font-bold tracking-tight">8Ball API</h1>
                    <div class="flex items-center space-x-1 text-sm text-gray-400 mt-1">
                        <span>© 2025 8Ball API</span>
                        <div class="glowing-dot"></div>
                        <span>v3.2.1</span>
                    </div>
                </div>
            </div>
            
            <!-- Navigation Links -->
            <div class="flex items-center space-x-6">
                <a href="#" class="font-medium hover:text-indigo-300 transition">Home</a>
                <a href="#" class="font-medium hover:text-indigo-300 transition">Docs</a>
                <div class="separator"></div>
                <a href="#" class="font-medium hover:text-indigo-300 transition">Playground</a>
                <a href="#" class="try-button px-5 py-2 rounded-full font-semibold text-white">Try It Now</a>
            </div>
        </div>
    </div>
    
    <!-- API Demo Section -->
    <div class="api-demo w-full max-w-4xl rounded-2xl p-8 mt-12">
        <div class="text-center">
            <h2 class="text-3xl font-bold mb-4">Ask the Magic 8Ball</h2>
            <p class="text-gray-400 max-w-2xl mx-auto mb-8">
                Get mystical answers to your questions with our simple API. 
                Just ask a yes/no question and receive a randomized 8Ball response.
            </p>
            
            <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-4">
                <input 
                    type="text" 
                    placeholder="Ask a question..." 
                    class="w-full md:w-96 px-6 py-3 bg-gray-800 border border-gray-700 rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-500"
                >
                <button class="try-button px-8 py-3 rounded-full font-semibold text-white whitespace-nowrap">
                    Shake 8Ball
                </button>
            </div>
            
            <div class="mt-10">
                <div class="inline-block bg-gray-800 px-4 py-2 rounded-lg">
                    <code class="text-indigo-300">GET https://api.8ball.com/v1/answer?question=your_question</code>
                </div>
            </div>
        </div>
    </div>
    
    <!-- API Responses -->
    <div class="w-full max-w-6xl mt-12">
        <h3 class="text-xl font-bold mb-6 text-center">Example Responses</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-800 p-6 rounded-xl">
                <div class="flex items-center mb-3">
                    <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div>
                    <span class="font-medium">Positive</span>
                </div>
                <p class="text-gray-300">"It is certain", "Without a doubt", "You may rely on it"</p>
            </div>
            
            <div class="bg-gray-800 p-6 rounded-xl">
                <div class="flex items-center mb-3">
                    <div class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></div>
                    <span class="font-medium">Neutral</span>
                </div>
                <p class="text-gray-300">"Reply hazy, try again", "Ask again later", "Better not tell you now"</p>
            </div>
            
            <div class="bg-gray-800 p-6 rounded-xl">
                <div class="flex items-center mb-3">
                    <div class="w-3 h-3 bg-red-500 rounded-full mr-2"></div>
                    <span class="font-medium">Negative</span>
                </div>
                <p class="text-gray-300">"Don't count on it", "My reply is no", "Outlook not so good"</p>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <div class="mt-16 text-center text-gray-500 text-sm">
        <p>© 2025 8Ball API. All rights reserved. | Made with magic and code</p>
    </div>
    
    <!-- Script for interactive elements -->
    <script>
        // Add animation to the Try It Now button
        document.querySelector('.try-button').addEventListener('click', function() {
            this.classList.add('animate-pulse');
            setTimeout(() => {
                this.classList.remove('animate-pulse');
            }, 500);
        });
    </script>
</body>
</html>












    <!-- by rex -->


    <!-- Text bod & button -->
      <form method="post" class="bg-white p-8 rounded shadow-md w-full max-w-md space-y-4">
        <h2 class="text-2xl font-bold text-gray-700">Prompt Submission</h2>

        <!-- Input Text Box -->
        <input
            type="text"
            name="prompt"
            placeholder="Enter your prompt..."
            class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
            required
        >

        <!-- Submit Button -->
        <button
            type="submit"
            class="w-full bg-blue-500 text-white p-3 rounded hover:bg-blue-600 transition duration-200"
        >
            Submit Prompt
        </button>

        <!-- Result Text Box -->
        <textarea
            readonly
            class="w-full p-3 border border-gray-300 rounded bg-gray-100 resize-none"
            rows="4"
        ><?php
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["prompt"])) {
                echo htmlspecialchars($_POST["prompt"]);
            }
        ?></textarea>
    </form>


    <!-- by Joanna -->
</body>
</html>