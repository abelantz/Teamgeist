<template>
  <div>
    <b-list-group>
        <b-list-group-item v-for="(item, index) in items" :key="item.age">
            {{ item.first_name }} 
            <div class="d-inline float-right">
                <button class="btn btn-danger" @click="showEditModal">Edit</button>
                <button class="btn btn-danger">Delete</button>
            </div> 
        </b-list-group-item>
    </b-list-group>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        showModal: false,
        items: [
          { age: 40, first_name: 'Dickerson', last_name: 'Macdonald' },
          { age: 21, first_name: 'Larsen', last_name: 'Shaw' },
          { age: 89, first_name: 'Geneva', last_name: 'Wilson' },
          { age: 38, first_name: 'Jami', last_name: 'Carney' }
        ]
      }
    }, 

    methods: {

        showEditModal() {
            showModal = true;
        }

    }
  }
</script>