module.exports = {
    darkMode: 'media',
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            typography: (theme) => ({
                dark: {
                    css: {
                        color: theme('colors.gray.200'),
                        '[class~="lead"]': {
                            color: theme('colors.gray.300'),
                        },
                        a: {
                            color: theme('colors.gray.100'),
                        },
                        strong: {
                            color: theme('colors.gray.100'),
                        },
                        'ol > li::before': {
                            color: theme('colors.gray.400'),
                        },
                        'ul > li::before': {
                            backgroundColor: theme('colors.gray.700'),
                        },
                        hr: {
                            borderColor: theme('colors.gray.800'),
                        },
                        blockquote: {
                            color: theme('colors.gray.100'),
                            borderLeftColor: theme('colors.gray.800'),
                        },
                        h1: {
                            color: theme('colors.gray.100'),
                        },
                        h2: {
                            color: theme('colors.gray.100'),
                        },
                        h3: {
                            color: theme('colors.gray.100'),
                        },
                        h4: {
                            color: theme('colors.gray.100'),
                        },
                        'figure figcaption': {
                            color: theme('colors.gray.400'),
                        },
                        code: {
                            color: theme('colors.gray.100'),
                        },
                        'a code': {
                            color: theme('colors.gray.100'),
                        },
                        pre: {
                            color: theme('colors.gray.800'),
                            backgroundColor: theme('colors.gray.200'),
                        },
                        thead: {
                            color: theme('colors.gray.100'),
                            borderBottomColor: theme('colors.gray.700'),
                        },
                        'tbody tr': {
                            borderBottomColor: theme('colors.gray.800'),
                        },
                    },
                },
            }),
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
        typography: ['dark'],
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ]
};
