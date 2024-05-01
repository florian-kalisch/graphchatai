### Detailed Feature Description for GraphChatAI

#### Introduction
GraphChatAI is a versatile tool designed to interact with the OpenAI™ API in a non-linear and graph-based manner. This tool enhances creative brainstorming, structured knowledge exploration, and complex conversation management by leveraging a graph interface to control and visualize the flow of AI-generated content.

#### Purpose and Idea
GraphChatAI aims to overcome the limitations of linear chat interfaces which can restrict creativity and clutter the context window with irrelevant information. By adopting a non-linear approach, it allows users to manage multiple conversation threads simultaneously and adjust the context dynamically. This setup facilitates generative graphs which are instrumental in creative brainstorming and structuring knowledge more effectively.

#### Features

1. **Plus Icon (Add New Nodes)**
   - Clicking the plus icon allows users to add new nodes to the graph. Each node represents a prompt or question that can be input by the user. This feature is crucial for expanding the conversation or exploring new ideas within the graph structure.

2. **Chat Icon (Generate Responses)**
   - The chat icon is used to call the OpenAI™ API. When a node is selected and the chat icon is clicked, the API generates a response based on the current node’s content and the specified mode. This allows the graph to dynamically evolve based on AI-generated content.

3. **Trash Icon (Delete Functionality)**
   - The functionality of the trash icon depends on the selection state:
     - **No Selection:** Clears the entire graph, deleting all nodes and edges.
     - **Node Selected:** Deletes the selected node and any edges connected to it. This helps in managing and refining the graph's structure.

4. **Save and Load Icons (Local Storage Interaction)**
   - These icons facilitate the saving and loading of the graph’s state to and from the browser’s local storage. This feature ensures that users can preserve their work and return to it later without loss of data.

5. **Graph/Layout Icon (Adjust Graph Layout)**
   - Users can switch the graph layout between vertical and horizontal orientations. This flexibility allows users to view their graph in a manner that best suits their workflow or preference.

6. **Answer Select Box (Response Mode Selection)**
   - This dropdown allows users to select the type of response:
     - **Answer:** Generates a standard text response.
     - **Brainstorm:** Produces a list of brainstorming points appended to the selected node, using the JSON mode of the API. Because json mode is used gpt-3.5-turbo-16k and gpt-4 are not supported.
     - **Knowledge Graph:** Treats the selected node as a subject to generate predicate-object pairs. Objects become new nodes, and predicates are used as labels for the edges connecting them.  Because json mode is used gpt-3.5-turbo-16k and gpt-4 are not supported.

7. **Node Input Settings**
   - **No Node Input:** Uses only the selected node’s content as the prompt.
   - **Merge Parents:** Utilizes content from parent nodes as input. This is useful for synthesizing information from multiple previous nodes.
   - **Full Path:** Suitable for nodes with a single input path, it traces the conversation from the initial node to the selected node, mimicking a traditional linear chat sequence.

8. **Response Multiplicity (1 Answer)**
   - This setting controls the number of responses generated (up to 3). While multiple responses can provide varied perspectives, they are usually recommended only in the "answer" mode to manage costs and maintain clarity.

9. **Model Selection (GPT-3.5-Turbo)**
   - By default, GraphChatAI uses the GPT-3.5-Turbo model. Users have the option to select from available OpenAI™ chat models, allowing flexibility in response style and computational cost.

10. **Smoothstep (Edge Layout Customization)**
    - This feature adjusts the curvature and layout of the edges connecting nodes, enhancing the visual appeal and readability of the graph.

11. **API Key Requirement**
    - Users must provide an OpenAI™ API Key to interact with the API. This is essential for fetching AI-generated responses and operating the tool.

#### Getting Started
To quickly start using GraphChatAI use the online version or:
1. Download the `index.html` file along with associated images.
2. Open the `index.html` file in a browser to run the tool locally.
3. No build step is required, simplifying the setup process.

#### Costs
Please note that using the OpenAI™ API with GraphChatAI will incur costs, as it is not covered under the ChatGPT Subscription.

This tool is designed to enhance user interaction with AI, making it suitable for a variety of creative and analytical applications. Whether you are brainstorming new ideas, exploring knowledge structures, or managing multifaceted dialogues, GraphChatAI offers a powerful interface to expand your capabilities with AI.

Note: The focus of the project was on quickly implementing the desired functionality. Probably 95% are AI generated (including the readme.md). Due to little to no available information / templates on how to use React Flow in a React project without node.js / build environment (this was one of my key requirements because I wanted a fast and lean solution), the latest cdn versions of the libraries are not used. I left it at that, which worked. I am also aware that the long index.html would be better split into separate files, the sample data should also be separated...

External Resources:
- https://github.com/facebook/react
- https://github.com/xyflow/xyflow
- https://github.com/dagrejs/dagre
- https://github.com/twbs/icons

Now enjoy exploring the awesome possibilities with GraphChatAI!