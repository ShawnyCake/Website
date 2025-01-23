<template>
  <div class="service-card">
    <!-- Service Icon -->
    <div class="service-icon">
      <img :src="icon" alt="service icon" />
    </div>

    <!-- Service Title -->
    <h2>{{ title }}</h2>

    <!-- Service Description -->
    <p class="description">{{ description }}</p>
  </div>
</template>

<script>
export default {
  props: {
    title: String,
    description: String,
    icon: String,
  },
};
</script>

<style scoped>
.service-card {
  background-color: #f4f4f4;
  border-radius: 8px;
  padding: 20px;
  text-align: center;
  margin: 20px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  border: 2px solid transparent; 
  transition: transform 0.3s ease, background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
  width: 100%;
  max-width: 300px;
  overflow: hidden;
  cursor: pointer;
  border: 2px solid #ff5c5c;
}

.service-card:hover {
  background-color: #333; 
  color: #fff; 
  transform: translateY(-10px); 
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); 
}

.service-card:hover h2 {
  color: #ff5c5c; 
}

.service-card:hover .description {
  color: #fff; 
  opacity: 1;
  height: auto;
  padding-top: 10px;
}

.service-icon img {
  width: 75px;
  height: auto;
  margin-bottom: 15px;
}

.service-card h2 {
  font-size: 1.8rem;
  margin-bottom: 10px;
  color: #333; 
  transition: color 0.3s ease; 
}

.service-card p {
  font-size: 1.2rem;
  color: #666; 
  opacity: 0;
  height: 0;
  padding: 0;
  transition: opacity 0.3s ease, height 0.3s ease, color 0.3s ease; 
}

.service-card:hover .description {
  opacity: 1;
  height: auto;
  padding-top: 10px;
}
</style>
