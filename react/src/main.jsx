import React from 'react'
import ReactDOM from 'react-dom/client'
import './index.css'
import route from './router.jsx'
import { RouterProvider } from 'react-router-dom'
import { ContextProvider } from './Contexts/ContextProvider'

ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <ContextProvider>
      <RouterProvider router={route}>
      </RouterProvider>
    </ContextProvider>
  </React.StrictMode>,
)
