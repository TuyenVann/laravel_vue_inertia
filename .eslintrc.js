/* eslint-disable no-undef */
module.exports = {
  env: {
    browser: true,
    es2021: true,
  },
  extends: ["eslint:recommended", "plugin:vue/vue3-recommended"],
  parserOptions: {
    ecmaVersion: 12,
    sourceType: "module",
  },
  plugins: ["vue"],
  rules: {
    indent: ["error", 2],
    "linebreak-style": ["error", "windows"],
    // quotes: ["error", "double"],
    semi: ["error", "always"],

    "vue/order-in-components": ["error"],
    "vue/require-default-prop": ["off"],
    "vue/max-attributes-per-line": [
      "error",
      {
        singleline: {
          max: 10,
          allowFirstLine: true,
        },
      },
    ],
    "vue/html-self-closing": ["off"],
    "vue/attributes-order": ["off"],
    "vue/html-indent": ["off"],
    "vue/no-parsing-error": ["off"]

  },
  globals: { require: true, defineProps: true },
};
