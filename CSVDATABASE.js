const database = 'CSV';
const collection = 'User';
use(database);
db.createCollection(collection);

const users = [{username : null,fullname:null:email:null,contact:null}];

database.collection.insertMany(users);