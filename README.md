
Backend Coding Test - Recrypt
For this exercise you will be asked to build a simple app. 

The task is a simplified version of something that we already do here at Digital Risks. 

Requirements
- You must include at least one test
- Create a private repo (GitHub does this for free) and invite morrislaptop
- Include a README on how to run your solution


Guidelines

The main goal of the exercise is to see how you translate a business brief into a technical solution. This includes your approach, solution design, and logical thinking.

We will also try to get some insight into what kind of code you produce. We are looking for simplicity, maintainability, understandability and good processes.

We’re not looking for perfection or a 100% complete product but what you can get done
in a set amount of time. 

Have fun and keep in mind not all aspects of the evaluation need to be demonstrated in code. Explaining understanding via comments and/or verbal communication during the technical interview can be effective for the purpose of this test.

Brief

Using Laravel and any datastore you see fit, you need to create a service that exposes two endpoints to save and retrieve values while storing them securely. All data at rest must be securely encrypted with the key provided by the clients. The service needs to handle all error conditions gracefully.

Storing Endpoint
The storing endpoint needs to securely store the provided data, it should accept three parameters:


- [x]  id {string} The unique id to store the data on. If the same key already exists, the data value should be overwritten.
- [x] encryption_key {string} The key to encrypt the data with.
- [x] value {*} Can be any JSON type, which should be retrieved as the original type.

Retrieval Endpoint
The retrieval endpoint performs a query on the stored data, decrypts and returns the results. As multiple records might be requested the endpoint should always return an array of records. The required parameters are:


- [x]  id {string} The exact id to query with or using the special wildcard ‘*’ query for a set of records (e.g. id: “engineering-jobs-*”).
- [x] decryption_key {string} The key to decrypt the data with. 

If the encryption key is wrong, make a system log and do not return the item. That is, return an empty array instead of an error message.

Deliverables
- [x] Source code tracked on a git repository.
- [x] Demonstrate operation through live-demo.
- [x] Installation and running instructions.
