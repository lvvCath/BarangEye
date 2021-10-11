import * as React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';

import Welcome from './screens/Welcome';
import LoginScreen from './screens/LoginScreen';
import Dashboard from './screens/Dashboard';
import News from './screens/News';
import Covid from './screens/Covid';
import Official from './screens/Official';
import Modal2 from './assets/components/Modal2';
import Modal from './assets/components/Modal';
import Account from './screens/Account';
import Edit from './screens/Edit';

const Stack = createNativeStackNavigator();

export default function App () {
  return (
    <NavigationContainer>
      <Stack.Navigator screenOptions={{headerShown: false}}>
        <Stack.Screen name="Welcome" component={Welcome}/>
           <Stack.Screen name="LoginScreen" component={LoginScreen}/> 
             <Stack.Screen name="Dashboard" component={Dashboard}/>
              <Stack.Screen name="News" component={News}/> 
              <Stack.Screen name="Covid" component={Covid}/>
              <Stack.Screen name="Official" component={Official}/>
              <Stack.Screen name="Modal2" component={Modal2}/>
              <Stack.Screen name="Modal" component={Modal}/>
              <Stack.Screen name="Account" component={Account}/>
                <Stack.Screen name="Edit" component={Edit}/>
      </Stack.Navigator>
    </NavigationContainer>
  );
};