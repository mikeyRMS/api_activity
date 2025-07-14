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