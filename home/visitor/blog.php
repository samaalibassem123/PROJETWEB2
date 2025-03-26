<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    serif: ["Merriweather", "serif"],
                    sans: ["Source Sans Pro", "sans-serif"],
                },
                colors: {
                    primary: "#1a8917",
                    dark: "#121212",
                },
            },
        },
    };
    </script>
    <title>Document</title>
</head>

<body>
    <!-- Header -->
    <header class="z-20 border-b border-black select-none backdrop-blur-sm sticky top-0">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <h1 class="text-xl md:text-2xl font-serif">
                    BloogersHub</span>
                </h1>
            </div>
            <div class="space-x-20 font-sans flex">
                <a href="index.php" class="hover:border-b hover:text-black/80 flex gap-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-book-open-text-icon lucide-book-open-text">
                        <path d="M12 7v14" />
                        <path d="M16 12h2" />
                        <path d="M16 8h2" />
                        <path
                            d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z" />
                        <path d="M6 12h2" />
                        <path d="M6 8h2" />
                    </svg>Blogs</a>
                <a href="./notification/index.php" class="hover:border-b hover:text-black/80 flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-bell-ring-icon lucide-bell-ring">
                        <path d="M10.268 21a2 2 0 0 0 3.464 0" />
                        <path d="M22 8c0-2.3-.8-4.3-2-6" />
                        <path
                            d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326" />
                        <path d="M4 2C2.8 3.7 2 5.7 2 8" />
                    </svg>
                    Notifications</a>

            </div>
            <!--Redirect to action page that close the session and transform him to the home page -->
            <div class="flex items-center space-x-4">
                <a href="/app/page.html"
                    class="bg-white p-2 px-4 border border-red-300 text-black curseur-pointer transition-all hover:text-white hover:bg-red-300">Log-out</a>
            </div>
        </div>
    </header>
    <main class="w-full h-svh p-24">

        <!--Card blog-->
        <div class="block shadow-md w-full p-5 space-y-2 hover:shadow-lg transition-all">
            <div class="flex gap-2 items-center">
                <img src="../../user.png" class="size-8" alt="">
                <span class="text-md font-serif text-black/80">Bloger name</span>
            </div>
            <hr class="w-full text-black/20" />
            <h1 class="text-2xl p-2 font-bold">How I Made My Next.js App Load 10x Faster (And You Can Too)</h1>
            <h1 class="text-sm text-black/50 px-2">Description</h1>
            <p class="p-2">We’ve all been there — your Next.js app is working fine in development, but the moment it
                hits
                production, it feels like it’s running on a potato.

                Slow page loads, unresponsive UI, and Core Web Vitals screaming at you like an angry manager.

                That was me a few months ago.
                But after testing, breaking, and optimizing my app to the max, I finally cracked the code.
                Here’s exactly how I made my Next.js app load faster and how you can too.

            </p>


            <!--ADD COMMENTS-->
            <form action="" method="post" class="flex gap-3">
                <input type="text" name="comment" class="outline-none border w-[90%] p-2 font-serif"
                    placeholder="Add a comment down Here">
                <input type="submit" value="post"
                    class="border px-8 bg-black/80 text-white font-serif cursor-pointer hover:bg-black transition-all">
            </form>



            <span class="font-bold underline">Comments:</span>
            <!--GET COMMENTS-->
            <div class="flex flex-col gap-2" id="comments">
                <!--Comment card-->
                <div class="flex flex-col border-b border-gray-200 w-full p-2">
                    <div class="flex justify-between">
                        <div class="flex gap-2 items-center">
                            <img src="../../user.png" class="size-6" />
                            <span class="text-sm font-serif text-black/80">user name</span>
                        </div>
                        <div class="flex">
                            <!--DELETE COMMENTS FORM-->
                            <form action="" method="post" class="px-2">
                                <input type="submit"
                                    class="text-sm underline text-gray-400 cursor-pointer hover:text-red-400"
                                    value="Delete comment">
                            </form>
                            <!--EDIT COMMENTS BUTTON-->
                            <button onclick="Showprompt()"
                                class="text-sm underline text-gray-400 cursor-pointer hover:text-green-400">Edit
                                comment</button>
                        </div>

                    </div>
                    <p class="p-2 text-sm">Thank you for these tips! I am eager to know which of them contributed the
                        most to your
                        3.9 ->0.9 seconds load time reduction!</p>
                </div>
            </div>
        </div>
        <section id="prompt"
            class="transition-all bg-black/80 absolute top-0 left-0 z-50 w-full h-svh hidden flex-col items-center justify-center ">
            <!--UPDATE THE COMMENTS FORM-->
            <form action="" method="post" class="flex flex-col p-4 w-[500px] gap-3 bg-white">
                <div class="flex w-full justify-between">
                    <legend class="font-bold ">Update the Comment</legend>
                    <span class="text-xl cursor-pointer" onclick="Closeprompt()">X</span>
                </div>
                <input type="text" name="comment" class="outline-none border w-full p-2 font-serif"
                    placeholder="Type the new comment">
                <input type="submit" value="Update" onclick="Closeprompt()"
                    class="border px-8 p-2 bg-black/80 text-white font-serif cursor-pointer hover:bg-black transition-all">
            </form>
        </section>
    </main>



</body>

<script>
function Showprompt() {
    document.getElementById("prompt").style.display = "flex";
}

function Closeprompt() {
    document.getElementById("prompt").style.display = "none";
}
</script>

</html>