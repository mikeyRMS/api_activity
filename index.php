<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>8Ball API Integration</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <!-- Navigation Bar -->
  <header class="bg-gray-800 text-white p-4 fixed top-0 w-full z-10">
    <nav class="bg-gray-800 p-4 sticky top-0 w-full">
      <div class="container mx-auto flex justify-between items-center">
        <div class="w-12 h-12 bg-indigo-600 rounded-full flex items-center justify-center">
          <span class="text-2xl font-bold">8</span>
        </div>
        <h1 class="text-2xl font-bold tracking-tight">8Ball API</h1>
        <div class="flex items-center space-x-1 text-sm text-gray-400 mt-1">
          <div class="glowing-dot"></div>
        </div>
        <ul class="flex space-x-4">
          <li><a href="#" class="try-button px-5 py-2 rounded-full font-semibold text-white">Try It Now</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Form Section -->
  <form id="eightball-form" class="bg-white p-8 rounded shadow-md w-full max-w-md space-y-4 mt-20">
    <h2 class="text-2xl font-bold text-gray-700">Ask the Magic 8Ball</h2>

    <!-- Input Text Box -->
    <input
      type="text"
      id="prompt"
      placeholder="Enter your question..."
      class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
      required
    >

    <!-- Submit Button -->
    <button
      type="submit"
      class="w-full bg-blue-500 text-white p-3 rounded hover:bg-blue-600 transition duration-200"
    >
      Ask
    </button>

    <!-- Result Text Box -->
    <textarea
      readonly
      id="responseBox"
      class="w-full p-3 border border-gray-300 rounded bg-gray-100 resize-none"
      rows="4"
    ></textarea>
  </form>

  <script>
    document.getElementById("eightball-form").addEventListener("submit", async function (e) {
      e.preventDefault();

      const prompt = document.getElementById("prompt").value;
      const responseBox = document.getElementById("responseBox");

      try {
        const res = await fetch("https://eightballapi.com/api", {
          method: "GET"
        });

        const data = await res.json();
        responseBox.value = `🎱 ${data.reading}`;
      } catch (error) {
        responseBox.value = "Error retrieving response. Try again later.";
      }
    });
  </script>
</body>
</html>