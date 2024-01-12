<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blind Stick</title>
    @vite('resources/css/app.css')
</head>

<body class=" bg-slate-900 ">
    <header class=" h-[50px] w-full flex items-center fixed text-slate-200 bg-slate-900">
        <nav class="container mx-auto flex justify-between items-center ">
            <a href="/" class="font-extrabold text-[180%]"><img src="" alt="">Blind Stick</a>
            <nav class="flex gap-8">
                <a href="/">Home</a>
                <a href="/service">Service</a>
                <a href="/">{{ $object }}</a>
                <a href="/">Contact</a>
            </nav>
        </nav>
    </header>
    <section class="container  min-h-screen  mx-auto pt-[3%] text-slate-200">
        <h1 class="text-center text-[200%] font-bold text-slate-200">Service</h1>
        <div class="flex flex-col items-center justify-center gap-3">
            <div class=" flex gap-5  w-full">
                <div class="w-[70%] bg-slate-700 grid p-5 rounded-[20px]">
                    <table class="w-full text-center">
                        <thead>
                            <td>No</td>
                            <td>Obstacle</td>
                            <td>Jarak</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Obstacle 1</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Obstacle 2</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Obstacle 3</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Obstacle 4</td>
                                <td>100</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="w-[30%] bg-slate-700 flex items-center justify-center flex-col rounded-[20px]">
                    <img src="/asset/image/audio.png" alt="" width="150px">
                    <img src="/asset/image/audioNone.png" alt="" width="150px">
                </div>
            </div>
            <div class="bg-slate-700 w-full flex p-12 rounded-[18px] items-center justify-center gap-5">
                <img src="/asset/image/user.png" alt="" width="150px">
                <img src="/asset/image/book.png" alt="" width="150px">
                <img src="/asset/image/jam.png" alt="" width="150px">
                <img src="/asset/image/map.png" alt="" width="150px">
                <img src="/asset/image/note.png" alt="" width="150px">
                <img src="/asset/image/volume.png" alt="" width="150px">
            </div>
        </div>
    </section>
    <section class="container flex items-center justify-center min-h-screen  mx-auto">

    </section>
    <script type="module">
        import { initializeApp } from 'https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js'
        import { getAnalytics } from 'https://www.gstatic.com/firebasejs/10.7.1/firebase-analytics.js'
        import { getAuth, signInWithPopup, GoogleAuthProvider } from 'https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js'
        import { getFirestore } from 'https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore.js'
        // import { getAuth,  } from "firebase/auth";



        const firebaseConfig = {
        apiKey: "AIzaSyBEg73avwSOIAdhy0P0cTyO_-ITBUB9R-8",
        authDomain: "blind-stick-19340.firebaseapp.com",
        projectId: "blind-stick-19340",
        storageBucket: "blind-stick-19340.appspot.com",
        messagingSenderId: "747670037565",
        appId: "1:747670037565:web:80bba4e05cfd859ed6b654",
        measurementId: "G-T1X9N9TL3M"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
        const provider = new GoogleAuthProvider();
        const auth = getAuth();
        document.querySelector('#btnGoogle').addEventListener('click', function(e){
            signInWithPopup(auth, provider)

            .then((result) => {
                // This gives you a Google Access Token. You can use it to access the Google API.
                const credential = GoogleAuthProvider.credentialFromResult(result);
                const token = credential.accessToken;
                // The signed-in user info.
                const user = result.user;
                // IdP data available using getAdditionalUserInfo(result)
                // ...
                console.log(user)
            }).catch((error) => {
                // Handle Errors here.
                const errorCode = error.code;
                const errorMessage = error.message;
                // The email of the user's account used.
                const email = error.customData.email;
                // The AuthCredential type that was used.
                const credential = GoogleAuthProvider.credentialFromError(error);
                // ...
            });
        });
    </script>
</body>

</html>