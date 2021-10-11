import React, { Component } from 'react';
import { View, StyleSheet, Text, ImageBackground, Dimensions, Animated, Easing} from 'react-native';
import { FlatList } from 'react-native-gesture-handler';

import Card1 from '../assets/components/Card1';

const { width, height } = Dimensions.get('screen');

export default class Official extends React.Component {
    state = {
        alignment: new Animated.Value(height),
        cardAlignment: new Animated.Value(400),
        cards1: [
            {

                person: 'Jovito M. Gahaton',
        
                position: 'Barangay Captain',
        
                image: require('../assets/img/BarangayOfficial/7.jpg'),
            },
            {
        
                person: 'Mary Grace M. Gonzaga',
        
                position: 'Barangay Secretary',
        
                image: require('../assets/img/BarangayOfficial/1f.jpg'),
            },
            {
        
                person: 'Ofelia A. Turco',
        
                position: 'Barangay Treasurer',
        
                image: require('../assets/img/BarangayOfficial/2f.jpg'),
            },
            {
        
                person: 'Neil O. Barrientos',
        
                position: 'Barangay Kagawad',
        
                image: require('../assets/img/BarangayOfficial/2.jpg'),
            },
            {
        
                person: 'Jose Pio G. Araneta',
        
                position: 'Barangay Kagawad',
        
                image: require('../assets/img/BarangayOfficial/3.jpg'),
            },
            {
        
                person: 'Araceli G. Pellejo',
        
                position: 'Barangay Kagawad',
        
                image: require('../assets/img/BarangayOfficial/3f.jpg'),
            },
            {
        
                person: 'Joemarie A. Deocampo',
        
                position: 'Barangay Kagawad',
        
                image: require('../assets/img/BarangayOfficial/4.jpg'),
            },
            {
        
                person: 'Jocelyn T. Cachumbo',
        
                position: 'Barangay Kagawad',
        
                image: require('../assets/img/BarangayOfficial/4f.jpg'),
            },
            {
        
                person: 'Marites B. Espeleta',
        
                position: 'Barangay Kagawad',
        
                image: require('../assets/img/BarangayOfficial/5f.jpg'),
            },
            {
        
                person: 'Raymundo C. Gerona, Sr.',
        
                position: 'Barangay Kagawad',
        
                image: require('../assets/img/BarangayOfficial/5.jpg'),
            },
            {
        
                person: 'SANGGUNIANG KABATAAN',
        
                position: '(SK OFFICIALS)',
        
                image: require('../assets/img/BarangayOfficial/sk.jpg'),
            },
            {
        
                person: 'Jesus V. Oreta',
        
                position: 'SK Chairman',
        
                image: require('../assets/img/BarangayOfficial/6.jpg'),
            },
            {
        
                person: 'Desira Blanca',
        
                position: 'SK Secretary',
        
                image: require('../assets/img/BarangayOfficial/6f.jpg'),
            },
            {
        
                person: 'Solaria L. Sancho',
        
                position: 'SK Treasurer',
        
                image: require('../assets/img/BarangayOfficial/7f.jpeg'),
            },
            {
        
                person: 'Paul Martin C. Espeleta',
        
                position: 'SK Kagawad',
        
                image: require('../assets/img/BarangayOfficial/1.jpg'),
            },
            {
        
                person: 'Jhoebelle D. Alicante',
        
                position: 'SK Kagawad',
        
                image: require('../assets/img/BarangayOfficial/8.jpg'),
            },
            {
        
                person: 'Jan Michael P. Jordan',
        
                position: 'SK Kagawad',
        
                image: require('../assets/img/BarangayOfficial/9.jpg'),
            },
            {
        
                person: 'Stephanie J. Alagos',
        
                position: 'SK Kagawad',
        
                image: require('../assets/img/BarangayOfficial/8f.jpg'),
            },
            {
        
                person: 'Edraine Lattrell G. Latido',
        
                position: 'SK Kagawad',
        
                image: require('../assets/img/BarangayOfficial/9f.jpg'),
            },
            {
        
                person: 'Jessa M. Montero',
        
                position: 'SK Kagawad',
        
                image: require('../assets/img/BarangayOfficial/11f.jpg'),
            },
            {
        
                person: 'Jeanicka V. Lacson',
        
                position: 'SK Kagawad',
        
                image: require('../assets/img/BarangayOfficial/10f.jpeg'),
            },
        ],
    };

    AnimateUI = () => {
        Animated.sequence([
            Animated.timing(this.state.alignment, {
                toValue: height / 4,
                duration: 800,
                easing: Easing.back(),
                useNativeDriver: false,
            }),
            Animated.timing(this.state.cardAlignment, {
                toValue: 0,
                duration: 700,
                easing: Easing.ease,
                useNativeDriver: false,
            })
        ]).start();
    };

    componentDidMount() {
        this.AnimateUI();
    }

    render() {
        const AnimatedBackground = {
            height: this.state.alignment,
        };

        const AnimatedCards ={
            transform: [
                {
                    translateY: this.state.cardAlignment,
                },
            ],
        };

        return (
            <View style={{backgroundColor: '#74808e'}}>
                <Animated.View style={[{ width: width, marginBottom: -5 }, AnimatedBackground]}>
                    <ImageBackground style={styles.backgroundImage} source={require('../assets/img/Dashboard/official1.png')} />
                </Animated.View>
                {/* <View style={{ alignItems: 'center', marginTop: -40 }}>
                    <Input />
                </View> */}
                <Animated.View style={[AnimatedCards]}>
                        <FlatList
                            horizontal
                            showsHorizontalScrollIndicator={false}
                            contentContainerStyle={{paddingBottom: 400}}
                            data={this.state.cards1}
                            renderItem={({item}) => (
                                <Card1
                                    person={item.person}
                                    position={item.position}
                                    image={item.image}
                                />
                            )}
                        >
                        </FlatList>
                </Animated.View>
            </View>
        );
    }
}

const styles = StyleSheet.create({
    backgroundImage: {
        width: '100%',
        height: '100%',
    },

});

