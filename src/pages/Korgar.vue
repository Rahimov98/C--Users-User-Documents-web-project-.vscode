<template>
  <div class="container">
    <h1>Коргарон</h1>
    <button
      type="button"
      class="btn btn-primary"
      data-bs-toggle="modal"
      data-bs-target="#exampleModal"
      data-bs-whatever="@mdo"
    >
      Добавить
    </button>
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >

      <div class="modal-dialog modal-fullscreen-xl-down">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Korgar</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="inputAddress" class="form-label"
                  >1. Ному Насаб</label
                >
                <input
                  type="text"
                  class="form-control"
                  v-model="name"
                  id="inputAddress"
                  placeholder="Ному Насаб"
                  aria-label="First name"
                />
              </div>
              <div class="col-md-6">
                <label for="DateOfBirth" class="form-label"
                  >2. Санаи таввалуд</label
                >
                <input
                  id="DateOfBirth"
                  class="form-control"
                  v-model="name1"
                  placeholder="16-11-1998"
                />
              </div>
              <div class="col-md-6">
                <label for="inputCity" class="form-label">3. Миллат</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="name2"
                  id="inputCity"
                  placeholder="точик"
                />
              </div>
              <div class="col-md-6">
                <label for="DateOfBirth" class="form-label"
                  >4. Мансубияти ичтимои</label
                >
                <input
                  id="DateOfBirth"
                  v-model="name3"
                  class="form-control"
                  placeholder="Коргар"
                />
              </div>
              <div class="col-md-6">
                <label for="inputState" class="form-label"
                  >5. Чои таввалуд</label
                >
                <input
                  id="inputState"
                  v-model="name4"
                  class="form-control"
                  placeholder=". . . . .  ."
                />
              </div>
              <div class="col-6">
                <label for="inputAddress" class="form-label"
                  >6. Сурогаи истикомат</label
                >
                <input
                  type="text"
                  class="form-control"
                  v-model="name5"
                  id="inputAddress"
                  placeholder="ш.Душанбе"
                />
              </div>
              <div class="col-md-6">
                <label for="DateOfBirth" class="form-label"
                  >7. Раками телефон</label
                >
                <input
                  id="DateOfBirth"
                  class="form-control"
                  v-model="name6"
                  placeholder="+(992)900 855 800"
                />
              </div>
              <div class="col-md-6">
                <label for="inputEmail4" class="form-label">8. Email</label>
                <input
                  type="email"
                  class="form-control"
                  v-model="name7"
                  id="inputEmail4"
                  placeholder="rahimovsaidmuhammad01@gmail.com"
                />
              </div>
              <div class="col-md -2">
                <button @click="Add" class="btn btn-primary">Add</button>
              </div>
              <div class="col-md-2">
                <button @click="Base" class="btn btn-primary">Base</button>
              </div>
            </div>
            <p v-for="person of persons" :key="person">
              {{ person.name }}
              {{ person.name1 }}
              {{ person.name2 }}
              {{ person.name3 }}
              {{ person.name4 }}
              {{ person.name5 }}
              {{ person.name6 }}
              {{ person.name7 }}
            </p>
          </div>
        </div>
      </div>
    </div> 
    <div></div>
  </div>
</template>

<script>
export default {
  data() {
   

    return {
       student : [],
      name: "",
      name1: "",
      name2: "",
      name3: "",
      name4: "",
      name5: "",
      name6: "",
      name7: "",
      persons: [],
    };
  },
  methods: {
    Add() {
      this.persons.push({
        name: this.name,
        name1: this.name1,
        name2: this.name2,
        name3: this.name3,
        name4: this.name4,
        name5: this.name5,
        name6: this.name6,
        name7: this.name7,
      });
    },

    Base() {
      const person = {
        name: this.name,
        name1: this.name1,
        name2: this.name2,
        name3: this.name3,
        name4: this.name4,
        name5: this.name5,
        name6: this.name6,
        name7: this.name7,
      };
      this.$http.post("http://localhost:3000/person", person);
    },
  },
};
</script>

<style scoped>
</style>