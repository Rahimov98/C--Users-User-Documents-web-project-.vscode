<template>
  <div class="container">
    <h1>Магистр</h1>
    <button
      type="button"
      class="btn btn-primary"
      data-bs-toggle="modal"
      data-bs-target="#exampleModal"
      data-bs-whatever="@mdo"
    >
      Добавить
    </button>
    <button type="button" class="btn btn-primary" @click="loadLists">
      List
    </button>

    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-fullscreen-xxl-down">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Doc</h5>
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
                <label for="inputAddress2" class="form-label">2. Ихтисос</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="name1"
                  id="inputAddress2"
                  placeholder="1М 33-01-01-01 Экология"
                />
              </div>
              <div class="col-md-6">
                <label for="inputZip" class="form-label">3. Шакли тахсил</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="name2"
                  id="inputZip"
                  placeholder="шартнома"
                />
              </div>
              <div class="col-md-6">
                <label for="DateOfBirth" class="form-label"
                  >4. Санаи таввалуд</label
                >
                <input
                  id="DateOfBirth"
                  class="form-control"
                  v-model="name3"
                  placeholder="16-11-1998"
                />
              </div>
              <div class="col-md-6">
                <label for="inputCity" class="form-label">5. Миллат</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="name4"
                  id="inputCity"
                  placeholder="точик"
                />
              </div>
              <div class="col-md-6">
                <label for="DateOfBirtun" class="form-label"
                  >6. Мансубияти ичтимои</label
                >
                <input
                  id="DateOfBirtun"
                  v-model="name5"
                  class="form-control"
                  placeholder="Коргар"
                />
              </div>
              <div class="col-md-6">
                <label for="inputState" class="form-label"
                  >7. Чои таввалуд</label
                >
                <input
                  id="inputState"
                  v-model="name6"
                  class="form-control"
                  placeholder=". . . . .  ."
                />
              </div>
              <div class="col-md-6">
                <label for="inputAddress3" class="form-label"
                  >8. Сурогаи истикомат</label
                >
                <input
                  type="text"
                  class="form-control"
                  v-model="name7"
                  id="inputAddress3"
                  placeholder="ш.Душанбе"
                />
              </div>
              <div class="col-md-6">
                <label for="telnumber" class="form-label"
                  >9. Раками телефон</label
                >
                <input
                  id="telnumber"
                  class="form-control"
                  v-model="name8"
                  placeholder="+(992)900 855 800"
                />
              </div>
              <div class="col-md-6">
                <label for="inputEmail4" class="form-label">10. Email</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="name9"
                  id="inputEmail4"
                  placeholder="rahimovsaidmuhammad01@gmail.com"
                />
              </div>
              <div class="col-md-12">
                <label for="inputPhotol4" class="form-label">11. Сурат</label>
                <input
                  type=""
                  class="form-control"
                  v-model="name10"
                  id="inputPhotol4"
                  placeholder="фото14.jpeg"
                />
                <br />
              <div class="col-md 4">
                  <button @click="FoT" class="btn btn-primary">FoT</button>
                </div>
              </div>
              <div class="col-md -2">
                <button @click="Add" class="btn btn-primary">Add</button>
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
              {{ person.name8 }}
              {{ person.name9 }}
              {{ person.name10 }}
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <table class="table table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Ному Насаб</th>
            <th scope="col">Ихтисос</th>
            <th scope="col">Шакли тахсил</th>
            <th scope="col">Санаи таввалуд</th>
            <th scope="col">Миллат</th>
            <th scope="col">Мансубияти ичтимои</th>
            <th scope="col">Чои таввалуд</th>
            <th scope="col">Сурогаи истикомат</th>
            <th scope="col">Раками телефон</th>
            <th scope="col">Email</th>
            <th scope="col">Сурат</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="list of lists" :key="list.id">
            <td>{{ list.id }}</td>
            <td>{{ list.name }}</td>
            <td>{{ list.name1 }}</td>
            <td>{{ list.name2 }}</td>
            <td>{{ list.name3 }}</td>
            <td>{{ list.name4 }}</td>
            <td>{{ list.name5 }}</td>
            <td>{{ list.name6 }}</td>
            <td>{{ list.name7 }}</td>
            <td>{{ list.name8 }}</td>
            <td>{{ list.name9 }}</td>
            <td>{{ list.name10 }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      name: "",
      name1: "",
      name2: "",
      name3: "",
      name4: "",
      name5: "",
      name6: "",
      name7: "",
      name8: "",
      name9: "",
      name10: "",
      lists: [],
      persons: [],
      json: {},
    };
  },
  methods: {
    Add() {
      var person = {
        name: this.name,
        name1: this.name1,
        name2: this.name2,
        name3: this.name3,
        name4: this.name4,
        name5: this.name5,
        name6: this.name6,
        name7: this.name7,
        name8: this.name8,
        name9: this.name9,
        name10: this.name10,
      };

      fetch("http://localhost/select/magistr.php", {
        method: "POST",
        // headers: { "Content-Type": "application/json" },
        body: JSON.stringify(person),
      })
        .then((response) => response.json())
        .then((j) => console.log(j))
        .catch((error) => {
          this.errorMesage = error;
        });
      // alert('Success');
      // console.log(person);
    },

    // FoT() {},
    loadLists() {
      this.$http
        .get("")
        .then((response) => {
          return response.json();
        })
        .then((lists) => {
          this.lists = lists;
          console.log(lists);
        });
    },
  },
};
</script>

<style scoped>
</style>

