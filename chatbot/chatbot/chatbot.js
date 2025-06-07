document.addEventListener("DOMContentLoaded", function() {
    const chatBox = document.getElementById("chatBox");
    const userInput = document.getElementById("userInput");
    const sendMessageBtn = document.getElementById("sendMessage");

      // Function to add a message to the chat box
      function addMessage(message, sender) {
        const messageDiv = document.createElement("div");
        messageDiv.classList.add("chat-message");
        
        if (sender === "user") {
            messageDiv.classList.add("user-message");
        } else if (sender === "bot") {
            messageDiv.classList.add("bot-message");
        }
        
        const messageParagraph = document.createElement("p");
        messageParagraph.innerHTML = message; // Set innerHTML to allow <br> tags

        messageDiv.appendChild(messageParagraph);
        chatBox.appendChild(messageDiv);
        chatBox.appendChild(document.createElement("br")); // Add line break after each message
        chatBox.appendChild(document.createElement("br")); // Add line break after each message
        chatBox.scrollTop = chatBox.scrollHeight;
    }


    // Function to handle user input
    function handleUserInput() {
        const message = userInput.value.trim();
        if (message === "") return;

        // Add user message to the chat box
        addMessage(message, "user");

        // Reset input field
        userInput.value = "";

        // Process user input after a delay
        setTimeout(() => {
        handleResponse(message.toLowerCase());
        }, 500);
    }

    // Function to handle bot response
    function handleResponse(message) {
        let response = "";

        // Initial bot message
        if (!message) {
            response = "I am your care assistant by just live";
            addMessage(response, "bot");
            return;
        }else if (message.includes("hai") || message.includes("hello")) {
            response = "Hello! I'm your care assistant here to support you. How are you feeling today?";
        } else if (message.includes("how are you") || message.includes("how do you feel")) {
            response = "I'm here for you, ready to listen and help however I can.";
        } else if (message.includes("problem") || message.includes("issue")) {
            response = "Rest assured, this is a safe space. Your conversations are confidential and only between us. Feel free to open up about anything bothering you.";
        } else if (message.includes("stress") || message.includes("anxious")) {
            response = "Feeling stressed or anxious is tough, but remember, you're not alone. I'm here to provide support and guidance.";
        } else if (message.includes("breath")) {
            response = "Take a moment to breathe deeply. Inhale, hold, and exhale slowly. Let's navigate through this together.";
        } else if (message.includes("stress relief")) {
            response = "Finding ways to relieve stress is crucial. Let's explore some techniques together that might help you feel better.";
        } else if (message.includes("feel")) {
            response = "Your feelings are valid, and it's important to acknowledge them. Please share what you're going through, and I'll be here to listen with empathy.";
        } else if (message.includes("day")) {
            response = "Reflecting on your day can be therapeutic. Take your time, and if you'd like, you can share your experiences with me.";
        } else if (message.includes("thank")) {
            response = "You're welcome! Helping you is what I'm here for. If you need anything else, just let me know.";
        } else if (message.includes("lonely")) {
            response = "Feeling lonely can be tough, but remember, I'm here for you. You're not alone in this journey.";
        } else if (message.includes("sad")) {
            response = "I'm sorry to hear that you're feeling sad. Would you like to talk about what's been bothering you?";
        } else if (message.includes("lost")) {
            response = "Feeling lost is difficult, but together, we can try to find some clarity. Take a deep breath, and let's figure this out.";
        } else if (message.includes("hope")) {
            response = "Hold on to hope, even during the darkest times. There's always a glimmer of light somewhere. Let's find it together.";
        } else if (message.includes("motivate")) {
            response = "You're capable of overcoming any challenge that comes your way. Believe in yourself, and take one step at a time.";
        } else if (message.includes("encourage")) {
            response = "You're doing great! Keep going, and remember that progress, no matter how small, is still progress.";
        } else if (message.includes("friend")) {
            response = "I'm here for you, just like a friend would be. Feel free to confide in me whenever you need to.";
        } else if (message.includes("cry")) {
            response = "It's okay to cry. Letting out your emotions can be cathartic. I'm here to support you through your tears.";
        } else if (message.includes("tired")) {
            response = "Feeling tired is your body's way of telling you to take a break. Remember to prioritize self-care and rest when you need it.";
        } else if (message.includes("motivated")) {
            response = "That's great to hear! What's motivating you today? Let's keep that positive energy going.";
        } else if (message.includes("smile")) {
            response = "Even in tough times, finding reasons to smile can make a big difference. What brings a smile to your face?";
        } else if (message.includes("love")) {
            response = "Love is a powerful force that connects us all. Remember to show love to yourself and others every day.";
        } else if (message.includes("afraid")) {
            response = "It's natural to feel afraid sometimes. Take a deep breath, and know that I'm here to help you face your fears.";
        } else if (message.includes("therapy")) {
            response = "Therapy can be incredibly beneficial for your mental health. If you're considering it, I can provide information to help you get started.";
        } else if (message.includes("positive")) {
            response = "Maintaining a positive mindset can make a big difference in how you approach challenges. Let's focus on the good things together.";
        } else if (message.includes("negativity")) {
            response = "Negative thoughts can be overwhelming, but together, we can work on shifting your perspective towards more positive thinking.";
        } else if (message.includes("self-care")) {
            response = "Taking care of yourself is essential for your well-being. What are some self-care activities you enjoy?";
        } else if (message.includes("anxiety attack")) {
            response = "If you're experiencing an anxiety attack, remember to focus on your breathing and try grounding techniques. I'm here to help you through it.";
        } else if (message.includes("venting")) {
            response = "It's important to let out your frustrations. Feel free to vent to me, and I'll listen without judgment.";
        } else if (message.includes("strength")) {
            response = "You're stronger than you think. Even on your hardest days, remember the strength that lies within you.";
        } else if (message.includes("therapy")) {
            response = "Therapy can be incredibly beneficial for your mental health. If you're considering it, I can provide information to help you get started.";
        } else if (message.includes("progress")) {
            response = "Every step forward, no matter how small, is still progress. Celebrate your achievements, no matter how minor they may seem.";
        } else if (message.includes("doing")) {
            response = "I am here to assist you.";
        }else {
            response = "Your well-being is my top priority. Please don't hesitate to share whatever's on your mind, and I'll do my best to support you.";
        }
    
        addMessage(response, "bot");
    }
    

   
    // Initial bot message
    handleResponse();

    sendMessageBtn.addEventListener("click", handleUserInput);

    // Event listener for pressing Enter key
    userInput.addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            handleUserInput();
        }
    });
});