<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tab -->
    <title>Profile Picture Upload</title>
    <!-- Tailwind link -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
        <form method="POST" action="upload.php" enctype="multipart/form-data">

        <div>
                        <label for="file" class="block text-sm font-medium leading-5  text-gray-700">Upload Profile Picture</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input name="myFile" type="file" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                                <span class="block w-full rounded-md shadow-sm">
                                    <input type="submit" value="Upload Profile Picture" name="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                </span>
                            </div>

        </form>
</body>
</html>