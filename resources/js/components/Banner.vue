<template>
  <section class="banner">

    <div class="logo-container">
      <img src="/images/logo.png" alt="Logo" class="logo" />
      <h3>VPV</h3>

      <div class="buttons">
        <button class="btn home-btn">Home</button>
        <button class="btn contact-btn">Contact Us</button>
      </div>
    </div>

    <div class="container">
      <h1>Viper Vectors</h1>
      <p>Your solution to your <span class="highlight">software development</span></p>
      <p>needs. We promise and we deliver!</p>
    </div>
  </section>
</template>

<script>
export default {
  name: "Banner"
};
</script>

<style scoped>

.banner {
  background: url('/images/banner.jpg') no-repeat center center;
  background-size: cover;
  height: 600px; 
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  position: relative;  
  padding-left: 30px; 
}

.logo-container {
  position: absolute;
  top: 20px;
  left: 20px;
  display: flex;
  align-items: center;
  z-index: 10;  
}

.logo {
  max-width: 50px; 
  height: auto;
  margin-right: 10px;
}

.logo-container h3 {
  font-size: 1.5rem;
  margin: 0;
  font-weight: bold;
}

.buttons {
  display: flex;
  align-items: center;
  margin-left: 20px;
}

.btn {
  background-color: transparent;
  border: 2px solid white;
  color: white;
  padding: 10px 20px;
  margin-left: 15px;
  font-size: 1rem;
  cursor: pointer;
  transition: background-color 0.3s, color 0.3s;
}

.btn:hover {
  background-color: white;
  color: #333; 
}

.container {
  text-align: left;  
  padding-left: 30px; 
  z-index: 5;  
  width: 100%;  
  position: absolute;  
  top: 40%;
  left: 50px; 
  transform: translateY(-30%);  
}

.container h1 {
  font-size: 3em;
  color: #c20000; 
  margin-bottom: 10px;
}

.container p {
  font-size: 1.5em;
  color: white; 
}

.highlight {
  background-color: #c20000; 
  padding: 5px 10px;  
  color: white;  
  border-radius: 5px; 
}
</style>
