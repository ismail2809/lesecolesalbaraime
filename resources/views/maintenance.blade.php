<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les écoles Albaraime - Maintenance</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        .pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        .bg-school {
            background-image: url('https://hebbkx1anhila5yf.public.blob.vercel-storage.com/ALBARAIME%20II-9cXdhE43VViVTbhuJNzg4zyFlr8Q9B.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .glass {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="bg-school font-sans text-gray-800">
    <div class="min-h-screen bg-gradient-to-br from-blue-900/70 to-purple-900/70">
        <div class="min-h-screen flex items-center justify-center p-4">
            <div class="bg-white/20 glass p-8 rounded-3xl shadow-2xl max-w-md w-full border border-white/30">
                <div class="text-center mb-8">
                    <h1 class="text-4xl font-bold mb-2 text-white">Les écoles Albaraime</h1>
                    <div class="h-1 w-20 bg-yellow-400 mx-auto rounded-full"></div>
                </div>
                <div class="text-8xl text-center mb-8 float">
                    🏫
                </div>
                <h2 class="text-3xl font-semibold text-center mb-6 text-white">Site en maintenance</h2>
                <p class="text-center mb-8 text-gray-200 leading-relaxed">
                    Nous effectuons actuellement des mises à jour pour améliorer votre expérience. 
                    Merci de votre patience et de votre compréhension.
                </p>
                <div class="flex justify-center space-x-2 mb-8">
                    <div class="w-3 h-3 bg-yellow-400 rounded-full pulse"></div>
                    <div class="w-3 h-3 bg-yellow-400 rounded-full pulse" style="animation-delay: 0.2s"></div>
                    <div class="w-3 h-3 bg-yellow-400 rounded-full pulse" style="animation-delay: 0.4s"></div>
                </div>
                <p class="text-center text-sm text-gray-300 font-light">
                    Nous serons de retour très bientôt !
                </p>
            </div>
        </div>
    </div>
    <div class="fixed bottom-4 right-4 text-white text-sm">
        <p>© 2024 Les écoles Albaraime. Tous droits réservés.</p>
    </div>
</body>
</html>