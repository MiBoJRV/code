import React from 'react';
import cn from 'classnames';
import { useInputLabel } from 'src/hooks';
import { FormFieldType } from 'src/types';
import {
  MessageBracketLeftIcon,
  MessageBracketRightIcon,
} from 'src/assets/icons';

export const TextArea: React.FC<FormFieldType> = ({
  id,
  placeholder = '',
  className = '',
}): JSX.Element => {
  const { labelChange, handleInputFocus, handleInputBlur, labelClass } =
    useInputLabel();
  return (
    <div key={id} className="inline-block my-3 relative">
      <div className="flex items-center relative ">
        <MessageBracketLeftIcon
          strokeWidth="1"
          className="-mr-0.5 w-[19px] xs:w-[18px] lg:w-[20px]"
        />
        <textarea
          // onChange={labelChange}
          onChange={labelChange}
          onFocus={handleInputFocus}
          onBlur={handleInputBlur}
          id={id}
          className={cn(
            'resize-none border-t border-b border-blue-light w-full text-grey text-x2 placeholder:text-grey bg-transparent px-2 pt-[19px] pb-[43px] outline-0 focus:placeholder:opacity-0',
            className
          )}
          placeholder={placeholder}
        />
        <label className={labelClass} htmlFor={placeholder}>
          {placeholder}
        </label>
        <MessageBracketRightIcon
          strokeWidth="1"
          className="-ml-0.5 w-[19px] xs:w-[18px] lg:w-[20px]"
        />
      </div>
      <p className="absolute text-red text-x4 left-5 -bottom-5 hidden">
        This field is required
      </p>
    </div>
  );
};
