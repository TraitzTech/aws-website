<template>
    <form @submit.prevent="handleSubmit">
        <h3 class="font-semibold">Create New User</h3>
        <label for="email">First Name: </label>
        <input v-model="firstName" @input="firstNameTouched = true"  required type="text">
        <p class="error" v-if="firstNameError">{{ firstNameError }}</p>
        <p class="success" v-else-if="firstNameTouched && !firstNameError">✔ First Name is valid</p>

        <label for="email">Last Name: </label>
        <input v-model="lastName"  @input="lastNameTouched=true" required type="text">
        <p class="error" v-if="lastNameError">{{ lastNameError }}</p>
        <p class="success" v-else-if="lastNameTouched && !lastNameError">✔ Last Name is valid</p>

        <label for="email">Email: </label>
        <input v-model="email" @input="emailTouched = true" required type="email">
        <p class="error" v-if="emailError">{{ emailError }}</p>
        <p class="success" v-else-if="emailTouched && !emailError">✔ Email is valid</p>
        <!-- ... -->
        <label for="password">Password: </label>
        <input v-model="password" @input="passwordTouched = true" required type="password">
        <p class="error" v-if="passwordError">{{ passwordError }}</p>
        <p class="success" v-else-if="passwordTouched && !passwordError">✔ Password is valid</p>

        <label>Role: </label>
        <select v-model="role">
            <option value="developer">Web Developer</option>
            <option value="designer">Designer</option>
        </select>

        <div class="terms">
            <input v-model="terms" @change="termsTouched = true" type="checkbox" required>
            <label for="">Accept Terms and Conditions</label>
            <p class="error" v-if="termsError">{{ termsError }}</p>
            <p class="success" v-else-if="termsTouched && !termsError">✔ Terms are accepted</p>
        </div>
        <div class="submit">
            <button class="create-account-button">Create an Account</button>
        </div>
    </form>
</template>

<script>
export default{
    data(){
        return{
            email: '',
            password: '',
            role: '',
            terms: false,
            emailTouched: false,
            passwordTouched: false,
            termsTouched: false,
            firstName: '',
            lastName: '',
            firstNameTouched: false,
            lastNameTouched: false
        }
    },
    methods: {
        async handleSubmit() {
            try {
                const response = await fetch('http://127.0.0.1:8000/api/register', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        name: this.firstName + ' ' + this.lastName,
                        email: this.email,
                        role: this.role,
                        password: this.password,
                    }),
                });

                if (response.status === 204) {
                    // User created successfully, redirect to /dashboard
                    this.$router.push('/dashboard');
                } else if (response.status === 400) {
                    // Handle bad request (validation errors, etc.)
                    const errorData = await response.json();
                    console.error('Bad Request:', errorData);
                    // Optionally, display error message to the user
                } else {
                    // Handle other error responses from the API
                    const errorData = await response.json();
                    console.error('API Error:', errorData);
                    // Optionally, display error message to the user
                }
            } catch (error) {
                console.error('Network Error:', error);
                // Handle network errors or other exceptions
            }
    }   

    },
    computed: {
        firstNameError(){
            if (!this.firstNameTouched) {
                return null
            }
            else if(!this.firstName){
                return "First Name is required"
            }
            else if (this.firstName.length < 2) {
                return "First Name must be at least 2 characters";
            } 
            else{
                return null
            }
        },
        lastNameError(){
            if (!this.lastNameTouched) {
                return null
            }
            else if(!this.lastName){
                return "Last Name is required"
            }
            else if (this.lastName.length < 2) {
                return "Last Name must be at least 2 characters";
            } 
            else{
                return null
            }
        },
        emailError() {
            if (!this.emailTouched) {
                return null;
            } else if (!this.email) {
                return "Email is required";
            } else if (!/\S+@\S+\.\S+/.test(this.email)) {
                return "Email is invalid";
            } else {
                return null;
            }
        },
        passwordError() {
            if (!this.passwordTouched) {
                return null;
            } else if (!this.password) {
                return "Password is required";
            } else if (this.password.length < 8) {
                return "Password must be at least 8 characters";
            } else {
                return null;
            }
        },
        termsError() {
            if (!this.termsTouched) {
                return null;
            } else if (!this.terms) {
                return "You must accept the terms and conditions";
            } else {
                return null;
            }
        }
    },
}
</script>

<style>
h3{
    text-align: center;
    color: #4CAF50;
}
form{
    max-width: 420px;
    margin: 30px auto;
    background: white;
    text-align: left;
    padding: 40px;
    border-radius: 10px;
}
label{
    color: #aaa;
    display: inline-block;
    margin: 25px 0 15px;
    font-size: 0.6rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: bold;
}
input, select{
    display: block;
    padding: 10px 6px;
    width: 100%;
    box-sizing: border-box;
    border: none;
    border-bottom: 1px solid #ddd;
    color: #555;
}
input[type="checkbox"]{
    display: inline-block;
    width: 16px;
    margin: 0 10px 0 0;
    position: relative;
    top: 2px;
}
.pill {
    display: inline-block;
    padding: 10px;
    background-color: #f2f2f2;
    margin: 5px;
    border-radius: 20px;
}

.cancel-button {
    background: none;
    border: none;
    cursor: pointer;
    margin-left: 10px;
    color: red;
}
.create-account-button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
    transition-duration: 0.4s;
}

.create-account-button:hover {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}
.error {
    color: red;
    margin-top: 5px;
    font-size: 15px;
}
.success {
    color: green;
    margin-top: 5px;
    font-size: 15px;
}
@media (max-width: 760px) {
    form{
        width: auto;
        margin: 20px 10px;
    }
}
</style>