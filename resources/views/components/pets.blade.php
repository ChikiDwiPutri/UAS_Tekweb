<template>
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold">Pets</h1>

        <table class="w-full">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="pet in pets" :key="pet.id">
                    <td>{{ pet.name }}</td>
                    <td>{{ pet.type }}</td>
                    <td>{{ pet.age }}</td>
                    <td>{{ pet.gender }}</td>
                    <td>{{ pet.status }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            pets: [],
        };
    },

    mounted() {
        axios.get('/api/pets').then((response) => {
            this.pets = response.data;
        });
    },
};
</script>
