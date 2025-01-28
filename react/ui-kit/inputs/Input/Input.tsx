import React from 'react';
import cn from 'classnames';
import { useInputLabel } from 'src/hooks';
import { FormFieldType } from 'src/types';
import { InputBracketRightIcon, InputBracketLeftIcon } from 'src/assets/icons';

export const Input: React.FC<FormFieldType> = ({
  id,
  placeholder = '',
  type = '',
  className = '',
}): JSX.Element => {
  const { labelChange, handleInputFocus, handleInputBlur, labelClass } =
    useInputLabel();
  return (
    <div key={id} className="inline-block my-3 relative">
      <div className="flex items-center relative ">
        <InputBracketLeftIcon
          strokeWidth="1"
          className="-mr-px w-[19px] xs:w-[18px] lg:w-[19px]"
        />
        <input
          onChange={labelChange}
          onFocus={handleInputFocus}
          onBlur={handleInputBlur}
          id={id}
          type={type}
          className={cn(
            'border-t border-b border-blue-light w-full text-grey text-x2 placeholder:text-grey bg-transparent px-2 pt-[19px] pb-[18px] outline-0 focus:placeholder:opacity-0',
            className
          )}
          placeholder={placeholder}
        />
        <label className={labelClass} htmlFor={placeholder}>
          {placeholder}
        </label>
        <InputBracketRightIcon
          width={18}
          strokeWidth="1"
          className="-ml-px w-[19px] xs:w-[18px] lg:w-[19px]"
        />
      </div>
      <p className="absolute text-red text-x4 left-5 -bottom-5 hidden">
        This field is required
      </p>
    </div>
  );
};
